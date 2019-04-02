<?php
namespace Agileti\IOEntidade\Console;

use Dataview\IntranetOne\Console\IOServiceRemoveCmd;
use Dataview\IntranetOne\IntranetOne;
use Agileti\IOEntidade\IOEntidadeServiceProvider;


class Remove extends IOServiceRemoveCmd
{
  public function __construct(){
    parent::__construct([
      "service"=>"entidade",
      "tables" =>['entidade'],
    ]);
  }

  public function handle(){
    parent::handle();
  }
}
