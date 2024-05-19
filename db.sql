-- Criação das tabelas
CREATE TABLE Usuario (
    userID INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    endereco VARCHAR(255),
    numeroTelefone VARCHAR(20),
    tipoUsuario ENUM('comprador', 'vendedor') NOT NULL,
    dataRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Endereco (
    IDEndereco INT PRIMARY KEY AUTO_INCREMENT,
    rua VARCHAR(255) NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    estado VARCHAR(255) NOT NULL,
    cep VARCHAR(20) NOT NULL
);

CREATE TABLE Usuario_Endereco (
    id_usuario INT,
    IDEndereco INT,
    PRIMARY KEY (id_usuario, IDEndereco)
);

CREATE TABLE Categoria (
    categoriaID INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE Produto (
    produtoID INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    condicao ENUM('novo', 'usado', 'defeito') NOT NULL,
    disponibilidade ENUM('disponivel', 'vendido', 'pausado') NOT NULL,
    categoriaID INT,
    userID INT
);

CREATE TABLE Usuario_Produto (
    userID INT,
    categoriaID INT,
    PRIMARY KEY (userID, categoriaID)
);

CREATE TABLE Produto_Categoria (
    produtoID INT,
    categoriaID INT,
    PRIMARY KEY (produtoID, categoriaID)
);

CREATE TABLE Chat (
    chatID INT PRIMARY KEY AUTO_INCREMENT,
    produtoID INT NOT NULL,
    compradorID INT NOT NULL,
    vendedorID INT NOT NULL,
    dataInicioChat TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Usuario_Chat (
    userID INT,
    chatID INT,
    PRIMARY KEY (userID, chatID)
);

CREATE TABLE Mensagem (
    mensagemID INT PRIMARY KEY AUTO_INCREMENT,
    chatID INT NOT NULL,
    remetente INT NOT NULL,
    conteudo TEXT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Negociacao (
    negociacaoID INT PRIMARY KEY AUTO_INCREMENT,
    chatID INT NOT NULL,
    valorNegociado DECIMAL(10, 2) NOT NULL,
    estado VARCHAR(255),
    linkPagamento VARCHAR(255),
    statusEntrega VARCHAR(255),
    dataNegociacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Criação das ligações (chaves estrangeiras)
ALTER TABLE Usuario_Endereco
ADD FOREIGN KEY (id_usuario) REFERENCES Usuario(userID),
ADD FOREIGN KEY (IDEndereco) REFERENCES Endereco(IDEndereco);

ALTER TABLE Produto
ADD FOREIGN KEY (categoriaID) REFERENCES Categoria(categoriaID),
ADD FOREIGN KEY (userID) REFERENCES Usuario(userID);

ALTER TABLE Usuario_Produto
ADD FOREIGN KEY (userID) REFERENCES Usuario(userID),
ADD FOREIGN KEY (categoriaID) REFERENCES Categoria(categoriaID);

ALTER TABLE Produto_Categoria
ADD FOREIGN KEY (produtoID) REFERENCES Produto(produtoID),
ADD FOREIGN KEY (categoriaID) REFERENCES Categoria(categoriaID);

ALTER TABLE Chat
ADD FOREIGN KEY (produtoID) REFERENCES Produto(produtoID),
ADD FOREIGN KEY (compradorID) REFERENCES Usuario(userID),
ADD FOREIGN KEY (vendedorID) REFERENCES Usuario(userID);

ALTER TABLE Usuario_Chat
ADD FOREIGN KEY (userID) REFERENCES Usuario(userID),
ADD FOREIGN KEY (chatID) REFERENCES Chat(chatID);

ALTER TABLE Mensagem
ADD FOREIGN KEY (chatID) REFERENCES Chat(chatID),
ADD FOREIGN KEY (remetente) REFERENCES Usuario(userID);

ALTER TABLE Negociacao
ADD FOREIGN KEY (chatID) REFERENCES Chat(chatID);
