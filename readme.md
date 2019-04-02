
# Cadastro de entidades para IntranetOne
Cadastro de entidades (clientes, fornecedores e funcionários) com endereço etc.
## Conteúdo
 
## Instalação

```sh
composer require intranetone-entidade
```
```sh
php artisan io-entidade:install
```

- Configure o webpack conforme abaixo 
```js
...
let entidade = require('intranetone-entidade');
io.compile({
  services:{
    ...
    new entidade()
    ...
  }
});

```
- Compile os assets e faça o cache
```sh
npm run dev|prod|watch
php artisan config:cache
```
