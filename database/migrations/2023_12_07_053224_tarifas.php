<?php
use App\Models\Tarifa;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tarifas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tarifas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            
            $table->timestamps();
        });
        $datosPredeterminados = array(
            [
                'nombre' => 'TBP'
                
            ],
            [
                'nombre' => 'TBT'
            ],
            [
                'nombre' => 'TCP'
            ],
            [
                'nombre' => 'TCT'
            ],
        );

        foreach ($datosPredeterminados as $tarifa) {
            $nuevoAdmin = new Tarifa();
            $nuevoAdmin->nombre = $tarifa['nombre'];
            $nuevoAdmin->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tarifas');
    }
}
