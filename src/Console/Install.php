<?php
namespace Agileti\IOEntidade\Console;
use Dataview\IntranetOne\Console\IOServiceInstallCmd;
use Agileti\IOEntidade\IOEntidadeServiceProvider;
use Agileti\IOEntidade\EntidadeSeeder;

class Install extends IOServiceInstallCmd
{
  public function __construct(){
    parent::__construct([
      "service"=>"entidade",
      "provider"=> IOEntidadeServiceProvider::class,
      "seeder"=>EntidadeSeeder::class,
    ]);
  }

  public function handle(){
    parent::handle();
  }
}
