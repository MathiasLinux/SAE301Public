<?php
require_once "modele/bdd.php";

class gestBien extends database
{
    public function addBien($nom, $visible, $prix, $adresse, $region, $x, $y, $chambres, $sdb, $superficie, $pieces, $epoque, $statut, $etat, $description, $urlVisite)
    {
        if ($visible == "yes") {
            $visible = 1;
        } else {
            $visible = 0;
        }
        $req = "INSERT INTO biens (nom, visible, prix, adresse, region, x, y, chambres, sdb, superficie, pieces, epoque, statut, etat, description, urlVisite) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->execReqPrepModif($req, array($nom, $visible, $prix, $adresse, $region, $x, $y, $chambres, $sdb, $superficie, $pieces, $epoque, $statut, $etat, $description, $urlVisite));
    }

    public function addFiles($name, $path, $id)
    {
        if (isset($path)) {
            $path = $path . "/";
            $total = count($_FILES[$name]['name']);
            for ($j = 0; $j < $total; $j++) {
                var_dump($_FILES[$name]['name'][$j]);
                if (isset($_FILES[$name]['name'][$j])) {
                    // Test s'il n'y a pas d'erreur
                    if ($_FILES[$name]['error'][$j] == 0) {
                        // Test si la taille du fichier uploadé est conforme
                        if ($_FILES[$name]['size'][$j] <= 20000000) {
                            // Test si l'extension du fichier uploadé est autorisée
                            $infosfichier = new SplFileInfo($_FILES[$name]['name'][$j]);
                            $extension_upload = $infosfichier->getExtension();
                            $extensions_autorisees = array('jpg', 'jpeg', 'png');
                            if (in_array($extension_upload, $extensions_autorisees)) {
                                if (is_dir("img/" . $path)) {
                                    // Stockage définitif du fichier photo dans le dossier uploads
                                    //move_uploaded_file($_FILES[$name]['tmp_name'][$j], "img/" . $path . $_FILES[$name]['name'][$j]);
                                    //+++++++++++++++++++++++++++++++++++++++++++
                                    //775
                                    echo $_FILES[$name]['tmp_name'][$j] . "<br>" . "<br>";
                                    echo "img/" . $path . $_FILES[$name]['name'][$j] . "<br>" . "<br>";
                                    var_dump($_FILES[$name]['name']);
                                    //see content of a folder
                                    $dirun = "img/" . $path;
                                    $filesun = scandir($dirun);
                                    var_dump($filesun);
                                    //++++++++++++++
                                    echo "Transfert du fichier " . $_FILES[$name]['name'][$j] . " effectué !";
                                    if (!(file_exists("img/" . $path . $id . "-1.jpg") or file_exists("img/" . $path . $id . "-1.jpeg") or file_exists("img/" . $path . $id . "-1.png"))) {
                                        move_uploaded_file($_FILES[$name]['tmp_name'][$j], "img/" . $path . $id . '-1.' . $extension_upload);
                                        //rename('img/' . $path . $_FILES[$name]['name'][$j], 'img/' . $path . $id . '-1.' . $extension_upload);
                                    } else {
                                        $i = 1;
                                        while (file_exists("img/" . $path . $id . "-" . $i . "." . $extension_upload)) {
                                            $i++;

                                            //rename("img/" . $path . $_FILES[$name]['name'][$j], "img/" . $path . $id . "-" . $i . "." . $extension_upload);
                                        }
                                        move_uploaded_file($_FILES[$name]['tmp_name'][$j], "img/" . $path . $id . '-' . $i . '.' . $extension_upload);
                                    }
                                    /*if (!file_exists("img/" . $path . $id . "-1.jpg") or !file_exists("img/" . $path . $id . "-1.jpeg") or !file_exists("img/" . $path . $id . "-1.png")) {
                                        move_uploaded_file($_FILES[$name]['tmp_name'][$j], "img/" . $path . $id . '-1.' . $extension_upload);
                                        //rename('img/' . $path . $_FILES[$name]['name'][$j], 'img/' . $path . $id . '-1.' . $extension_upload);
                                    }
                                    if (file_exists("img/" . $path . $id . "-1.jpg") or file_exists("img/" . $path . $id . "-1.jpeg") or file_exists("img/" . $path . $id . "-1.png")) {
                                        $i = 1;
                                        while (file_exists("img/" . $path . $id . "-" . $i . "." . $extension_upload)) {
                                            $i++;
                                            move_uploaded_file($_FILES[$name]['tmp_name'][$j], "img/" . $path . $id . '-' . $i . '.' . $extension_upload);
                                            //rename("img/" . $path . $_FILES[$name]['name'][$j], "img/" . $path . $id . "-" . $i . "." . $extension_upload);
                                        }
                                    }*/

                                    /*if (file_exists("img/" . $path . $id . "-1.jpg") or file_exists("img/" . $path . $id . "-1.jpeg") or file_exists("img/" . $path . $id . "-1.png")) {
                                        //Incrementation si le fichier existe déjà
                                        $i = 1;
                                        while (file_exists("img/" . $path . $id . "-" . $i . "." . $extension_upload)) {
                                            $i++;
                                            rename("img/" . $path . $_FILES[$name]['name'][$j], "img/" . $path . $id . "-" . $i . "." . $extension_upload);
                                        }
                                    } else {
                                        rename('img/' . $path . $_FILES[$name]['name'][$j], 'img/' . $path . $id . '-1.' . $extension_upload);
                                    }*/
                                }
                            } else
                                echo "Echec du transfert : Type de fichier non autorisé.";
                        } else
                            echo "Echec du transfert : Fichier trop volumineux.";
                    } else
                        echo "Echec du transfert avec le code d'erreur : " . $_FILES[$name]['error'];
                }
            }
        }
    }

    public function getBienID($id)
    {
        $req = "SELECT * FROM biens WHERE id = ?";
        $bienId = $this->execReqPrep($req, array($id));
        return $bienId[0];
    }

    public function updateBien($titre, $modif, $id)
    {
        $req = "UPDATE biens SET $titre = ? WHERE id = ?";
        $this->execReqPrepModif($req, array($modif, $id));
    }

    public function delBien($id)
    {
        $req = "DELETE FROM biens WHERE id = ?";
        $this->execReqPrepModif($req, array($id));
    }
}