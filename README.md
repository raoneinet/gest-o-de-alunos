# 🎓 Gest-o-de-Alunos

Sistema CRUD (Create, Read, Update, Delete) para gestão de alunos, desenvolvido com tecnologias tradicionais da web, sem uso de frameworks. Fácil de adaptar para outros contextos similares.

---

## 📝 Descrição

Este projeto permite o gerenciamento completo de dados de alunos, incluindo cadastro, listagem, edição e exclusão, utilizando:

- Frontend: HTML, CSS e JavaScript (para interatividade);
- Backend: PHP para manipulação de dados;
- Banco de Dados: MySQL para armazenamento persistente.

---

## ⚙️ Funcionalidades

- ➕ Cadastrar novos alunos (nome, email, telefone, etc);
- 📋 Listar todos os alunos cadastrados;
- ✏️ Editar informações de um aluno existente;
- ❌ Excluir alunos do sistema;
- Validações básicas no frontend e backend.

---

## 🛠 Tecnologias utilizadas

- HTML5  
- CSS3  
- JavaScript (vanilla)  
- PHP  
- MySQL

---

## 📦 Requisitos

- Servidor web com suporte a PHP (ex: Apache, Nginx);
- Banco de dados MySQL ou MariaDB;
- Navegador moderno.

---

## 🚀 Como configurar

1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/gest-o-de-alunos.git
Importe o arquivo SQL (ex: database.sql) para seu banco de dados MySQL para criar a tabela alunos:

sql
CREATE TABLE alunos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  telefone VARCHAR(20),
  data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Configure a conexão com o banco no arquivo config.php (ou arquivo equivalente):

php
<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
?>
Coloque os arquivos no diretório do servidor web e acesse via navegador.


✍️ Autor
Desenvolvido por Raone Ferreira


![gestao de alunos](https://github.com/user-attachments/assets/aa25a940-5f38-48ea-81fe-9ac0db891cc9)

![editar aluno](https://github.com/user-attachments/assets/1470524e-de18-4cef-9dd0-f0db1f7b350d)
