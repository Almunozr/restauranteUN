<?php
use App\Models\Beneficiario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Beneficiarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('password')->default("12345678");
            $table->unsignedBigInteger('idTarifa');
            $table->unsignedBigInteger('idCampus');
            $table->string('estado')->default('Activo');
            $table->string('vegetariano')->default('NO');
            $table->string('detalleAlimenticio')->nullable();
            $table->string('programa');
            $table->string('nContacto')->nullable();
            // $table->string('permisoSabados');

            $table->foreign('idTarifa')->references('id')->on('tarifas');
            $table->foreign('idCampus')->references('id')->on('campus');

            $table->timestamps();
        });

        // $datosPredeterminados = array(
        //     [
        //         'correo' => 'jupachon@unal.edu.co',
        //         'password' => '$2y$10$fifIMBBX8pBMXF2ZBZCTO.MVXtSl6nuQYRravAEa6NOG9kIDVvPi6'
        //     ],
        //     [
        //         'correo' => 'ptabordam@unal.edu.co',
        //         'password' => '$2y$10$fifIMBBX8pBMXF2ZBZCTO.MVXtSl6nuQYRravAEa6NOG9kIDVvPi6'
        //     ],
        //     [
        //         'correo' => 'almunozr@unal.edu.co',
        //         'password' => '$2y$10$fifIMBBX8pBMXF2ZBZCTO.MVXtSl6nuQYRravAEa6NOG9kIDVvPi6'
        //     ],
        // );

        // foreach ($datosPredeterminados as $administrador) {
        //     $nuevoAdmin = new Administrador();
        //     $nuevoAdmin->correo = $administrador['correo'];
        //     $nuevoAdmin->password = $administrador['password'];
        //     $nuevoAdmin->save();
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('beneficiario');
    }
}
