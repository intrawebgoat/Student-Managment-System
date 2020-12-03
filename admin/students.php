<?php
include_once '../includes/header.inc.php';
?>

<!-- Dodaj Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" id="modal" role="document">
        <div class="modal-content " style="
    width: 834px !important;
    margin-top: 65px;
">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Dodaj studenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="../scripts/php/addStudent.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ime">Ime</label>
                            <input type="text" class="form-control" minlength="3" maxlength="10" required name="ime"
                                   id="ime" placeholder="Alek">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prezime">Prezime</label>
                            <input type="text" class="form-control" minlength="3" maxlength="15" required name="prezime"
                                   id="prezime"
                                   placeholder="Niksic">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ime_roditelja">Ime roditelja</label>
                            <input type="text" class="form-control" minlength="3" maxlength="10" required
                                   id="ime_roditelja" name="ime_roditelja"
                                   placeholder="Bakir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefon">Telefon</label>
                            <input type="number" class="form-control" minlength="9" maxlength="13" required id="telefon"
                                   name="telefon"
                                   placeholder="38761695239">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jmbg">JMBG</label>
                        <input type="number" class="form-control" required id="jmbg"
                               name="jmbg"
                               placeholder="0101006500006" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;">
                    </div>
                    <div class="form-group">
                        <label for="adresa">Adresa</label>
                        <input type="text" class="form-control" required minlength="5" maxlength="30" name="adresa"
                               id="adresa"
                               placeholder="Konatur bb, Travnik, 72270">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" minlength="3" maxlength="30" required name="email"
                                   id="email" name="email"
                                   placeholder="alek@live.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword">Password</label>
                            <input type="text" class="form-control" minlength="5" maxlength="100" required
                                   name="password" id="inputPassword"
                                   name="password"
                                   placeholder="******">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Fakultet</label>
                            <select class="form-control" id="fakultetSelect" name="fakultet" required>
                                <option id="fakultetHold"></option>
                                <option value="Ekonomski fakultet">Ekonomski fakultet</option>
                                <option value="Ekološki fakultet">Ekološki fakultet</option>
                                <option value="Saobraćajni fakultet">Saobraćajni fakultet</option>
                                <option value="Pravni fakultet">Pravni fakultet</option>
                                <option value="Fakultet informacionih tehnologija">Fakultet informacionih tehnologija</option>
                                <option value="Fakultet za medije i komunikacije">Fakultet za medije i komunikacije</option>
                                <option value="Fakultet politehničkih nauka">Fakultet politehničkih nauka</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Godine</label>
                            <select class="form-control" id="godineSelect" name="studijskiProgram" required>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Odsjek</label>
                            <select class="form-control" id="odsjekSelect" name="odsjek" required>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="broj_indeksa">Broj indeksa</label>
                            <input type="text" class="form-control" required id="broj_indeksa" name="broj_indeksa"
                                   placeholder="FIT-10/19">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                        <button type="submit" class="btn btn-primary" name="submit">Dodaj studenta</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>

<!-- EDIT USER Modal -->
<div class="modal fade" id="editUser" data-id="1" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" id="modal" role="document">
        <div class="modal-content " style="
    width: 834px !important;
    margin-top: 65px;
">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Uredi podatke</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="post" action="../scripts/php/ajaxStudent.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ime">Ime</label>
                            <input type="text" class="form-control" required name="ime" id="edit_ime"
                                   placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prezime">Prezime</label>
                            <input type="text" class="form-control" required name="prezime" id="edit_prezime"
                                   placeholder="Niksic">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ime_roditelja">Ime roditelja</label>
                            <input type="text" class="form-control" required id="edit_ime_roditelja"
                                   name="ime_roditelja"
                                   placeholder="Bakir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefon">Telefon</label>
                            <input type="number" class="form-control" required id="edit_telefon" name="telefon"
                                   placeholder="38761695239">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jmbg">JMBG</label>
                        <input type="number" class="form-control" required id="edit_jmbg" name="jmbg"
                               placeholder="0101006500006">
                    </div>
                    <div class="form-group">
                        <label for="adresa">Adresa</label>
                        <input type="text" class="form-control" required minlength="7" name="adresa" id="edit_adresa"
                               placeholder="Konatur bb, Travnik, 72270">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" required name="email" id="edit_email" name="email"
                                   placeholder="alek@live.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" required name="password" id="edit_password"
                                   name="password"
                                   placeholder="******">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fakultet">Fakultet</label>
                        <input type="text" class="form-control" required id="edit_fakultet" name="fakultet"
                               placeholder="Fakultet informacionih tehnologija">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="odsjek">Odsjek</label>
                            <input type="text" class="form-control" required id="edit_odsjek" name="odsjek"
                                   placeholder="Softversko programiranje">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="broj_indeksa">Broj indeksa</label>
                            <input type="text" class="form-control" required id="edit_broj_indeksa" name="broj_indeksa"
                                   placeholder="FIT-10/19">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                        <button type="submit" class="btn btn-primary" id="save_edit"
                        ">Sačuvaj</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>


<div class="container-fluid" style="background-color: white;">
    <div class="row mt-0" style="height: 100vh;">
        <div class="table-responsive col-10 mx-auto" style="overflow-x:auto;margin-top: 70px;" id="tableT">

            <button type="button" id="modalButton" class="modalButton btn btn-light" data-toggle="modal"
                    data-target="#exampleModalCenter" style="margin-bottom: 10px;">
                Dodaj studenta
            </button>

            <button type="button" id="printButton" class="modalButton btn btn-light" style="margin-bottom: 10px;">
                Print
            </button>

            <table class="table-striped" style="text-align: center" id="myTable">

                <thead class="thead-dark">
                <tr>
                    <th>Radnja</th>
                    <th>Userid</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Ime roditelja</th>
                    <th>Adresa</th>
                    <th>Telefon</th>
                    <th>JMBG</th>
                    <th>E-mail</th>
                    <th>Broj indexa</th>
                    <th>Fakultet</th>
                    <th>Studijski program</th>
                    <th>Odsjek</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include_once "../includes/dbh.inc.php";

                $sql = $conn->query("SELECT * FROM studenti");

                while ($data = $sql->fetch_array()) {
                    echo '<tr><td>
<button class="editButton" data-id="' . $data['userid'] . '" onclick="edit(' . $data['userid'] . ')" data-toggle="modal" data-target="#editUser" style="outline: none; border: none;">
    <svg class="w-6 h-6"  viewBox="0 0 20 20" style="width: 25;height: 25;fill: #14274E;"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
 </button>
 
 <button data-id="' . $data['userid'] . '" onclick="deleteUser(' . $data['userid'] . ')" style="outline: none; border: none; background-color: none;">
<svg class="w-6 h-6" viewBox="0 0 20 20" style="width: 25;height: 25;fill: #14274E;"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
 </button>


</td>
                <td>' . $data['userid'] . '</td><td>' . $data['ime'] . '</td><td>' . $data['prezime'] . '</td><td>' . $data['ime_roditelja'] . '</td><td>' . $data['adresa'] . '</td>
                <td>' . $data['telefon'] . '</td><td>' . $data['jmbg'] . '</td><td>' . $data['email'] . '</td>
                <td>' . $data['broj_indeksa'] . '</td><td>' . $data['fakultet'] . '</td><td>' . $data['studijskiProgram'] . '
        </td ><td>' . $data['odsjek'] . '
        </td >
</tr > ';
                }
                ?>

                <?php
                include_once '../includes/footer.inc.php';
                include_once '../scripts/php/errorCheck.php';
                ?>
                <script src="../scripts/js/loadStudent.js"></script>
                <script>
                    $("#fakultetSelect").change(function () {
                        $("#fakultetHold").remove();
                        $("#godineSelect").empty();
                        $("#godineSelect").append( "<option>3+2+3</option>" );
                        $("#godineSelect").append( "<option>4+1+3</option>" );

                        var selectedFax = $("#fakultetSelect option:selected").text();
                        if (selectedFax === "Ekonomski fakultet") {
                            $("#odsjekSelect").empty();
                            $("#odsjekSelect").append( "<option value='Ekonomija'>Ekonomija</option>" );
                            $("#odsjekSelect").append( "<option value='Računovodstvo,finansije i revizija'>Računovodstvo,finansije i revizija</option>" );
                            $("#odsjekSelect").append( "<option value='Finansijska tržišta, instrumenti i institucij'>Finansijska tržišta, instrumenti i institucije</option>" );
                            $("#odsjekSelect").append( "<option value='Preduzetništvo'>Preduzetništvo</option>" );
                            $("#odsjekSelect").append( "<option value='Marketing i trgovina'>Marketing i trgovina</option>" );
                            $("#odsjekSelect").append( "<option value='Bankarstvo i osiguranje'>Bankarstvo i osiguranje</option>" );
                            $("#odsjekSelect").append( "<option value='Menadžment'>Menadžment</option>" );
                            $("#odsjekSelect").append( "<option value='Menadžment u obrazovanju'>Menadžment u obrazovanju</option>" );
                            $("#odsjekSelect").append( "<option value='Menadžment u zdravstvu'>Menadžment u zdravstvu</option>" );
                            $("#odsjekSelect").append( "<option value='Turizam i hotelijerstvo'>Turizam i hotelijerstvo</option>" );
                        } else if (selectedFax === "Ekološki fakultet") {
                            $("#odsjekSelect").append( "<option value='Ekologija i zaštita životne sredine'>Ekologija i zaštita životne sredine</option>" );
                            $("#odsjekSelect").append( "<option value='Inžinjerstvo zaštite životne sredine'>Inžinjerstvo zaštite životne sredine</option>" );
                            $("#odsjekSelect").append( "<option value='Biodiverzitet'>Biodiverzitet</option>" );
                            $("#odsjekSelect").append( "<option value='Zaštita okoliša u gradovima'>Zaštita okoliša u gradovima</option>" );
                            $("#odsjekSelect").append( "<option value='Održivi razvoj'>Održivi razvoj</option>" );
                        } else if (selectedFax === "Saobraćajni fakultet") {
                            $("#odsjekSelect").append( "<option value='Drumski i gradski saobraćaj'>Drumski i gradski saobraćaj</option>" );
                            $("#odsjekSelect").append( "<option value='Menadžment u saobraćaju'>Menadžment u saobraćaju</option>" );
                            $("#odsjekSelect").append( "<option value='Vazdušni saobraćaj'>Vazdušni saobraćaj</option>" );
                            $("#odsjekSelect").append( "<option value='Sigurnost u drumskom saobraćaju'>Sigurnost u drumskom saobraćaju</option>" );
                            $("#odsjekSelect").append( "<option value='Saobraćaj'>Saobraćaj</option>" );
                        } else if (selectedFax === "Pravni fakultet") {
                            $("#odsjekSelect").append( "<option value='Građanskopravni'>Građanskopravni</option>" );
                            $("#odsjekSelect").append( "<option value='Historija države i prava'>Historija države i prava</option>" );
                            $("#odsjekSelect").append( "<option value='Krivičnopravni'>Krivičnopravni</option>" );
                            $("#odsjekSelect").append( "<option value='Državno i međunarodno javno pravo'>Državno i međunarodno javno pravo</option>" );
                            $("#odsjekSelect").append( "<option value='Privedno pravni'>Privedno pravni</option>" );
                            $("#odsjekSelect").append( "<option value='Javna uprava'>Javna uprava</option>" );
                        } else if (selectedFax === "Fakultet informacionih tehnologija") {
                            $("#odsjekSelect").empty();
                            $("#odsjekSelect").append( "<option value='Softversko programiranje'>Softversko programiranje</option>" );
                            $("#odsjekSelect").append( "<option value='Informacione tehnologije'>Informacione tehnologije</option>"  );
                            $("#odsjekSelect").append( "<option value='Računarski sistemi i mreže'>Računarski sistemi i mreže</option>" );
                        } else if (selectedFax === "Fakultet za medije i komunikacije") {
                            $("#odsjekSelect").append( "<option value='Odnosi s javnošću'>Odnosi s javnošću</option>" );
                            $("#odsjekSelect").append( "<option value='Mediji'>Mediji</option>" );
                            $("#odsjekSelect").append( "<option value='Komunikacije'>Komunikacije</option>" );
                        } else if (selectedFax === "Fakultet politehničkih nauka") {
                            $("#odsjekSelect").append( "<option value='Mašinstvo'>Mašinstvo</option>" );
                            $("#odsjekSelect").append( "<option value='Građevinarstvo'>Građevinarstvo</option>" );
                            $("#odsjekSelect").append( "<option value='Elektrotehnika'>Elektrotehnika</option>" );
                            $("#odsjekSelect").append( "<option value='Logistika'>Logistika</option>" );
                            $("#odsjekSelect").append( "<option value='Sigurnost i zaštita na radu'>Sigurnost i zaštita na radu</option>" );
                            $("#odsjekSelect").append( "<option value='Inžinjerski menađžment'>Inžinjerski menađžment</option>" );
                            $("#odsjekSelect").append( "<option value='Arhitektura i urbanizam'>Arhitektura i urbanizam</option>" );
                        }

                    });
                </script>
                <script>

                    if (window.location.href.indexOf('success=studentadded') > 0) {
                        alert('Student je uspješno dodan u bazu');
                    } else if (window.location.href.indexOf('success=professoradded') > 0) {
                        alert('Profesor je uspješno dodan u bazu');
                    } else if (window.location.href.indexOf('success=assistantadded') > 0) {
                        alert('Asistent je uspješno dodan u bazu');
                    } else if (window.location.href.indexOf('success=staffadded') > 0) {
                        alert('Pomoćno osoblje je uspješno dodan u bazu');
                    }

                    $(document).ready(function () {

                        $('#printButton').click(function () {
                            window.print();
                        });

                        $('#myTable').DataTable(
                            {
                                language: {
                                    searchPlaceholder: "Pretraži studente",
                                    search: "",
                                    "decimal": "",
                                    "emptyTable": "Podaci nisu dostupni u tabeli",
                                    "info": "Prikaz _START_ do _END_ od _TOTAL_ unosa",
                                    "infoEmpty": "Prikazivanje 0 do 0 od 0 unosa",
                                    "infoFiltered": "(filtrirano od ukupno _MAX_ unosa)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Prikaži _MENU_ unosa",
                                    "loadingRecords": "Učitavanje ...",
                                    "processing": "Obrada ...",
                                    "zeroRecords": "Nisu pronađeni odgovarajući zapisi",
                                    "paginate": {
                                        "first": "Prvo",
                                        "last": "Zadnje",
                                        "next": "Sledeća",
                                        "previous": "Prethodna"
                                    },
                                    "aria": {
                                        "sortAscending": ": aktiviraj za sortiranje stupca uzlazno",
                                        "sortDescending": ": aktiviraj za sortiranje silaznog stupca"
                                    }
                                }
                            });
                    });
                </script>
