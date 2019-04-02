<?php
namespace Agileti\IOEntidade;

use Dataview\IntranetOne\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Sentinel;

class EntidadeSeeder extends Seeder
{
    public function run()
    {
        //cria o serviço se ele não existe
        if (!Service::where('service', 'Entidade')->exists()) {
            Service::insert([
                'service' => "Entidade",
                'alias' => 'entidade',
                'ico' => 'ico-book-users',
                'description' => 'Entidades do Sistema (Cliente, Funcionário e Fornecedor)',
                'order' => Service::max('order') + 1,
            ]);
        }
        //seta privilegios padrão para o role admin
        $adminRole = Sentinel::findRoleBySlug('admin');
        $adminRole->addPermission('entidade.view');
        $adminRole->addPermission('entidade.create');
        $adminRole->addPermission('entidade.update');
        $adminRole->addPermission('entidade.delete');
        $adminRole->save();
        /*
        Cidade::query()->truncate();
        $json = File::get("public/io/services/cidades.json");
        $data = json_decode($json, true);
        $i = 0;
        foreach ($data as $obj) {
            Cidade::create(
                array(
                    'id' => $obj['id'],
                    'cidade' => $obj['cidade'],
                    'uf' => $obj['uf'],
                )
            );
        }
        */
    }
}
