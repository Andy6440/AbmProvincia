<?php

namespace App\Console\Commands;

use App\Helpers\CustomHelper;
use App\Http\Requests\CiudadRequest;
use App\Http\Requests\ProvinciaRequest;
use App\Models\Ciudad;
use App\Models\Provincia;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateCity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:city {ciudad} {provincia}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear nueva ciudad en la base de datos';

    /**
     * Este comando crea una nueva ciudad.
     *
     * Este comando acepta dos argumentos: el nombre de la ciudad y la provincia. 
     * Crea una nueva ciudad con el nombre y la provincia proporcionados.
     *
     * Ejemplo de uso:
     * php artisan create:city Parana EntreRios
     *
     * @param string $nombreCiudad El nombre de la ciudad a crear.
     * @param string $nombreProvincia El nombre de la provincia a la que pertenece la ciudad.
     */
    public function handle()
    {
        try {
            $ciudad = CustomHelper::addSpacesBeforeUppercase($this->argument('ciudad'));
            $provinciaName = CustomHelper::addSpacesBeforeUppercase($this->argument('provincia'));
            $provincia = Provincia::where('descripcion_provincia', 'like', '%' . strtolower(trim($provinciaName)) . '%')->first();

            if (!$provincia) {
                $this->error("Provincia {$provinciaName} no existe.");
                return Command::FAILURE;
            }
            $ciudadRequest = new CiudadRequest();
            $validator = Validator::make([
                'id_provincia' => $provincia->id_provincia,
                'descripcion_ciudad' => $ciudad,
            ], $ciudadRequest->rules());
            if ($validator->fails()) {
                $this->error('Error: ' . $validator->errors()->first());
                return Command::FAILURE;
            }


            $city = new Ciudad();
            $city->descripcion_ciudad = $ciudad;
            $city->id_provincia = $provincia->id_provincia;
            $city->save();

            $this->info("Ciudad {$ciudad} creada con éxito.");
            return Command::SUCCESS;
        } catch (Exception $e) {
            $this->error('Ha ocurrido un error al crear la ciudad: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
