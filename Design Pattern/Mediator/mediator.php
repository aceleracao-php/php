<?php

class EventDispatcher
{
    /**
     * @var array
     */
    private $observers = [];

    public function __construct()
    {
      // O grupo de eventos especiais para observadores que desejam ouvir todos
       // eventos.
        $this->observers["*"] = [];
    }

    private function initEventGroup(string &$event = "*"): void
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string $event = "*"): array
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers["*"];

        return array_merge($group, $all);
    }

    public function attach(Observer $observer, string $event = "*"): void
    {
        $this->initEventGroup($event);

        $this->observers[$event][] = $observer;
    }

    public function detach(Observer $observer, string $event = "*"): void
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function trigger(string $event, object $emitter, $data = null): void
    {
        echo "EventDispatcher: Broadcasting the '$event' event.\n";
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($event, $emitter, $data);
        }
    }
}

/**
  * Uma função auxiliar simples para fornecer acesso global ao despachante de eventos.
  */
function events(): EventDispatcher
{
    static $eventDispatcher;
    if (!$eventDispatcher) {
        $eventDispatcher = new EventDispatcher();
    }

    return $eventDispatcher;
}

/**
  * A interface do Observer define como os componentes recebem o evento
  * notificações.
  */
interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}

/**
  * Ao contrário do nosso exemplo de padrão Observer, este exemplo torna o UserRepository
  * agir como um componente regular que não tem nenhum evento especial relacionado
  * métodos. Como qualquer outro componente, esta classe depende do EventDispatcher
  * para transmitir seus eventos e ouvir os demais.
  *
  */
class UserRepository implements Observer
{
    /**
     * @var array List of application's users.
     */
    private $users = [];

    /**
     * Components can subscribe to events by themselves or by client code.
     */
    public function __construct()
    {
        events()->attach($this, "users:deleted");
    }

    /**
      * Os componentes podem decidir se desejam processar um evento usando seu
      * nome, emissor ou qualquer dado contextual passado junto com o evento.
      */
    public function update(string $event, object $emitter, $data = null): void
    {
        switch ($event) {
            case "users:deleted":
                if ($emitter === $this) {
                    return;
                }
                $this->deleteUser($data, true);
                break;
        }
    }

    // Esses métodos representam a lógica de negócios da classe.

    public function initialize(string $filename): void
    {
        echo "UserRepository: Loading user records from a file.\n";
        // ...
        events()->trigger("users:init", $this, $filename);
    }

    public function createUser(array $data, bool $silent = false): User
    {
        echo "UserRepository: Creating a user.\n";

        $user = new User();
        $user->update($data);

        $id = bin2hex(openssl_random_pseudo_bytes(16));
        $user->update(["id" => $id]);
        $this->users[$id] = $user;

        if (!$silent) {
            events()->trigger("users:created", $this, $user);
        }

        return $user;
    }

    public function updateUser(User $user, array $data, bool $silent = false): ?User
    {
        echo "UserRepository: Updating a user.\n";

        $id = $user->attributes["id"];
        if (!isset($this->users[$id])) {
            return null;
        }

        $user = $this->users[$id];
        $user->update($data);

        if (!$silent) {
            events()->trigger("users:updated", $this, $user);
        }

        return $user;
    }

    public function deleteUser(User $user, bool $silent = false): void
    {
        echo "UserRepository: Deleting a user.\n";

        $id = $user->attributes["id"];
        if (!isset($this->users[$id])) {
            return;
        }

        unset($this->users[$id]);

        if (!$silent) {
            events()->trigger("users:deleted", $this, $user);
        }
    }
}

/**
 * Let's keep the User class trivial since it's not the focus of our example.
 */
class User
{
    public $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }

    /**
     * All objects can trigger events.
     */
    public function delete(): void
    {
        echo "Usuário: agora posso excluir a mim mesmo sem me preocupar com o repositório. \n";
        events()->trigger("users:deleted", $this, $this);
    }
}

/**
  * Este componente concreto registra todos os eventos aos quais está inscrito.
  */
class Logger implements Observer
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    public function update(string $event, object $emitter, $data = null)
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data '" . json_encode($data) . "'\n";
        file_put_contents($this->filename, $entry, FILE_APPEND);

        echo "Registrador: escrevi a entrada '$event' no registro. \n";
    }
}

/**
  * Este componente concreto envia instruções iniciais para novos usuários. O cliente
  * é responsável por anexar este componente a um evento de criação de usuário adequado.
  */
class OnboardingNotification implements Observer
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function update(string $event, object $emitter, $data = null): void
    {
        echo "OnboardingNotification: The notification has been emailed!\n";
    }
}
$repository = new UserRepository();
events()->attach($repository, "facebook:update");

$logger = new Logger(__DIR__ . "/log.txt");
events()->attach($logger, "*");

$onboarding = new OnboardingNotification("1@example.com");
events()->attach($onboarding, "users:created");

$repository->initialize(__DIR__ . "users.csv");

$user = $repository->createUser([
    "name" => "Jonatan Santos",
    "email" => "jo5555@example.com",
]);

$user->delete();
