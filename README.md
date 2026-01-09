# PHP Messenger MVC 💬

![PHP](https://img.shields.io/badge/PHP-8.0+-blue.svg) ![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg) ![MySQL](https://img.shields.io/badge/MySQL-Database-blue.svg) ![Architecture](https://img.shields.io/badge/MVC-Pattern-green.svg)

Uma aplicação web de troca de mensagens em tempo real, desenvolvida com PHP puro seguindo a arquitetura MVC, com interface moderna construída em Bootstrap.

## 📖 Sobre o Projeto

Este projeto foi desenvolvido para oferecer uma plataforma de comunicação direta e eficiente. O foco principal foi aplicar o padrão de arquitetura **MVC (Model-View-Controller)** para separar a lógica de negócio da interface do usuário, garantindo um código mais organizado e fácil de manter.

O sistema permite que usuários se cadastrem, façam login e troquem mensagens em uma área exclusiva, simulando as funcionalidades básicas de um aplicativo de mensagens moderno.

## ✨ Funcionalidades Principais

* **Fluxo de Autenticação:** Telas dedicadas para login e cadastro de novos usuários.
* **Área Interna Privada:** Acesso restrito apenas para usuários autenticados.
* **Gerenciamento de Mensagens:** Interface central para visualizar mensagens recebidas, enviadas e compor novos textos.
* **Recursos de Status:** Sistema de "Visto" (Status da mensagem), proporcionando uma experiência semelhante ao WhatsApp.
* **Resposta Direta:** Funcionalidade que permite responder diretamente ao remetente com agilidade.
* **Interface Responsiva:** Utilização do Bootstrap para garantir que o sistema funcione bem em diferentes tamanhos de tela.

## 📐 Arquitetura

O projeto utiliza o padrão **MVC**, o que foi fundamental para a organização do back-end:
* **Models:** Responsáveis pela comunicação com o banco de dados e as regras de negócio (vínculo de mensagens e conversas).
* **Views:** Desenvolvidas com PHP e Bootstrap para a apresentação visual ao usuário.
* **Controllers:** Atuam como intermediários, processando as requisições, validando logins e gerenciando o fluxo das mensagens.

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** [PHP](https://www.php.net/)
* **Framework CSS:** [Bootstrap 5](https://getbootstrap.com/)
* **Banco de Dados:** MySQL
* **Padronização:** Arquitetura MVC
* **Servidor Sugerido:** Apache (XAMPP/WAMP)

## 📥 Como Executar

1. Clone o repositório:
   ```bash
   git clone [https://github.com/LukasBasilio/webforum-de-mensagens.git](https://github.com/LukasBasilio/webforum-de-mensagens.git)
