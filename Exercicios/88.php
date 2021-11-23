<?php
interface IClienteRepository
   {
       function AdicionarCliente(Cliente $cliente);
   }
interface IClienteServices
   {
       function AdicionaCliente(Cliente $cliente);
   }

interface ICPFServices
   {
       function IsValid(string $cpf);
   }

interface IEmailServices
   {
      function IsValid(string $email);
      function Enviar(string $de, string $para, string $assunto, string $mensagem);
   }

public class EmailServices implements IEmailServices
   {
       function IsValid(string $email)
       {
           return true;
       }

      function Enviar(string $de, string $para, string $assunto, string $mensagem)
       {
         $email = ["De" => $de, "Para" => $para, "Assunto" => $assunto, "Mensagem" => $mensagem];
         echo json_encode($email);

       }
   }

public class ClienteServices implements IClienteServices
   {
       private IClienteRepository $clienteRepository;
       private IEmailServices $emailServices;

       public $clienteServices(IEmailServices $emailServices, IClienteRepository $clienteRepository)
       {
           $this->emailServices = $emailServices;
           $this->clienteRepository = $clienteRepository;
       }

       public string AdicionarCliente(Cliente $cliente)
       {
           if (!$cliente->IsValid())
               echo "Dados inválidos";

           $this->clienteRepository->AdicionarCliente($cliente);
           $this->emailServices->Enviar("empresa@empresa.com", $cliente.Email, "Bem Vindo", "Parabéns está Cadastrado");

           return "$cliente cadastrado com sucesso";
       }
   }
