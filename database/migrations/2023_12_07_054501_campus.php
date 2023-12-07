<?php
use App\Models\Campu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Campus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('campus', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->string('nombre');
            $table->timestamps();
        });

        $datosPredeterminados = array(
            [
                'nombre' => 'Nubia'
            ],
            [
                'nombre' => 'Palogrande'
            ],

        );

        foreach ($datosPredeterminados as $campus) {
            $nuevoAdmin = new Campu();
            $nuevoAdmin->nombre = $campus['nombre'];
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
        Schema::dropIfExists('campus');
       
    }
}
