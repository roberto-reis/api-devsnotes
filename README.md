### Author: José Roberto
#### E-mail: tekinforroberto@gmail.com

Quais os endpoints?
- (Metodo) /url (Parâmetros)
- (GET) /api/notes
- (GET) /api/note/123
- (POST) /api/note (title, body)
- (PUT) /api/note/123 (title, body)
- (DELETE) /api/note/123

<br />

### About

`api-devsnotes` é uma aplicação API sistema de anotação simples, desenvolvida na linguagem PHP e no Laravel Framework.

<br />

### Tecnologia utilizadas

- PHP
- Laravel
- MySql

<br />

#### Getting started

```bash
$ git clone https://github.com/roberto-reis/api-devsnotes.git
```

```bash
$ cd api-devsnotes
```

```bash
$ composer install
```

Copiar o env.example e renomear para .env e set o banco de dados

Executar as mingrations
```bash
$ php artisan migrate
```

Gerar a key
```bash
$ php artisan key:generate
```

Up projeto
```bash
$ php artisan serve
```

<br />

## License
`api-devsnotes` é um software de código aberto licenciado sob a [MIT license](https://opensource.org/licenses/MIT).




