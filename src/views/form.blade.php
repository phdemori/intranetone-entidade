<form action = '/admin/entidade/create' id='default-form' method = 'post' class = 'form-fit'>
  @component('IntranetOne::io.components.wizard',[
    "_id" => "default-wizard",
    "_min_height"=>"435px",
    "_steps"=> [
        ["name" => "Dados Gerais", "view"=> "Entidade::form-general"],
        ["name" => "Formas de Contato", "view"=> "Entidade::form-contato"]
      ]
  ])
  @endcomponent
</form>