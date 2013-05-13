CREATE TABLE usuario(
	codUsuario INTEGER UNIQUE PRIMARY KEY,
	nome VARCHAR(20) NOT NULL,
	endereco VARCHAR(50) NOT NULL,
	datnasc VARCHAR(10),
	cpf CHAR(14) NOT NULL,
	telefone VARCHAR(15)NOT NULL
);# MySQL não retornou nenhum registo.

CREATE TABLE cliente(
	codCliente INTEGER UNIQUE PRIMARY KEY,
	FOREIGN KEY (codCliente) REFERENCES usuario (codUsuario)
);# MySQL não retornou nenhum registo.

CREATE TABLE funcionario(
	codFuncionario INTEGER UNIQUE PRIMARY KEY,
	salario FLOAT NOT NULL,
	login VARCHAR(20) NOT NULL,
	senha VARCHAR(20) NOT NULL,
	FOREIGN KEY (codFuncionario) REFERENCES usuario (codUsuario)	
);# MySQL não retornou nenhum registo.

CREATE TABLE administrador(
	codAdm INTEGER UNIQUE PRIMARY KEY,
	login VARCHAR(20) NOT NULL,
	senha VARCHAR(20) NOT NULL,
	FOREIGN KEY (codAdm) REFERENCES usuario (codUsuario)
);# MySQL não retornou nenhum registo.

CREATE TABLE fornecedor(
	codFornecedor INTEGER UNIQUE PRIMARY KEY,
	nome VARCHAR(20) NOT NULL,
	endereço VARCHAR(50) NOT NULL,
	cnpj CHAR(20) NOT NULL,
	telefone VARCHAR(15) NOT NULL
);# MySQL não retornou nenhum registo.

CREATE TABLE produto(
	codProduto INTEGER UNIQUE PRIMARY KEY,
	codFornecedor INTEGER,
	nome VARCHAR(20) NOT NULL,
	preço FLOAT NOT NULL,
	qtd INTEGER,
	FOREIGN KEY (codFornecedor) REFERENCES fornecedor (codFornecedor)
);# MySQL não retornou nenhum registo.

CREATE TABLE venda(
	codVenda INTEGER AUTO_INCREMENT PRIMARY KEY,
	codFuncionario INTEGER,
	codProduto INTEGER,
	codCliente INTEGER,
	dataVenda VARCHAR(10) NOT NULL,
	qtdVenda INTEGER NOT NULL,
	FOREIGN KEY (codFuncionario) REFERENCES funcionario (codFuncionario),
	FOREIGN KEY (codProduto) REFERENCES produto (codProduto),
	FOREIGN KEY (codCliente) REFERENCES cliente (codCliente)
);# MySQL não retornou nenhum registo.

CREATE TABLE permissao(
	codigo_permissao INTEGER UNIQUE PRIMARY KEY,
	nome VARCHAR(15) NOT NULL,
	descricao VARCHAR(50)   
);# MySQL não retornou nenhum registo.


CREATE TABLE permissao_usuario(
	codPermissaoUsuario INTEGER,
	codigo_permissao INTEGER,
	PRIMARY KEY (codPermissaoUsuario, codigo_permissao),
	FOREIGN KEY (codPermissaoUsuario) REFERENCES usuario (codUsuario),
	FOREIGN KEY (codigo_permissao) REFERENCES permissao (codigo_permissao)
);# MySQL não retornou nenhum registo.

CREATE TABLE estoque(
	codEstoque INTEGER UNIQUE PRIMARY KEY,
	codProduto INTEGER,
	FOREIGN KEY (codProduto) REFERENCES produto (codProduto)	
);# MySQL não retornou nenhum registo.

CREATE TABLE reserva(
	codReserva INTEGER UNIQUE PRIMARY KEY,
	codProduto INTEGER,
	codCliente INTEGER,
	dataReserva VARCHAR(10) NOT NULL,
	hora VARCHAR(5) NOT NULL,
	FOREIGN KEY (codProduto) REFERENCES produto (codProduto),
	FOREIGN KEY (codCliente) REFERENCES cliente (codCliente)
);# MySQL não retornou nenhum registo.