<?php

namespace App\Console\Commands;

use App\Http\Requests\CiudadRequest;
use App\Http\Requests\ProvinciaRequest;
use App\Models\Ciudad;
use App\Models\Provincia;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateCity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:city {ciudad}  {provincia}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear nueva ciudad en la base de datos';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $ciudad = $this->argument('ciudad');
        $provinciaName = $this->argument('provincia');
        $provincia = Provincia::where('descripcion_provincia', 'like','%'.strtolower(trim($provinciaName)).'%')->first();

        if (!$provincia) {
            $this->error("Provincia {$provinciaName} no existe.");
            return 1;
        }
        $ciudadRequest = new CiudadRequest();

        $validator = Validator::make([
            'id_provincia' => $provincia->id_provincia,
            'descripcion_ciudad' => $ciudad,
        ], $ciudadRequest->rules());

        if ($validator->fails()) {
            $this->error('Error: ' . $validator->errors()->first());
            return 1;
        }


        $city = new Ciudad();
        $city->descripcion_ciudad = $ciudad;
        $city->id_provincia = $provincia->id_provincia;
        $city->save();

        $this->info("Ciudad {$ciudad} creada con éxito.");
        return Command::SUCCESS;
    }
}
