
                            <?php foreach($angkabyid->result_array() as $ni){
                              // Representasi Rule Bangunan
                              //    Mekanika Rekayasa 2
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131209'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_mk2 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_mk2 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_mk2 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_mk2 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_mk2 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_mk2 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_mk2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_mk2 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_mk2 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_mk2 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_mk2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_mk2 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_mk2 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_mk2 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_mk2 = 1;
                                 }
                              }
                              //    Matematika Terapan 2
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131205'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_mt2 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_mt2 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_mt2 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_mt2 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_mt2 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_mt2 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_mt2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_mt2 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_mt2 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_mt2 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_mt2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_mt2 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_mt2 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_mt2 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_mt2 = 1;
                                 }
                              }


                              // Representasi Rule Bangunan Air
                              //    Fisika Terapan
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131103'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_ft = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_ft = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_ft = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_ft = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_ft = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_ft = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_ft = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_ft = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_ft = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_ft = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_ft = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_ft = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_ft = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_ft = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_ft = 1;
                                 }
                              }
                              //    Hidrolika 1
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131211'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_h1 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_h1 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_h1 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_h1 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_h1 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_h1 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_h1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_h1 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_h1 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_h1 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_h1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_h1 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_h1 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_h1 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_h1 = 1;
                                 }
                              }


                              // Representasi Rule Transportasi
                              //    Mekanika Tanah 1
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131212'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_mekt1 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_mekt1 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_mekt1 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_mekt1 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_mekt1 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_mekt1 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_mekt1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_mekt1 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_mekt1 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_mekt1 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_mekt1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_mekt1 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_mekt1 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_mekt1 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_mekt1 = 1;
                                 }
                              }
                              //    Ilmu Ukur Tanah 2
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131215'){
                                   $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_iut2 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_iut2 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_iut2 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_iut2 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_iut2 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_iut2 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_iut2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_iut2 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_iut2 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_iut2 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_iut2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_iut2 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_iut2 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_iut2 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_iut2 = 1;
                                 }
                              }
                            }

                            echo 'fuzzy Mekanika Rekayasa 2<br>'.$kurang_mk2."<br>".$cukup_mk2."<br>".$baik_mk2."<br>".$sangat_mk2.'<br>';
                            echo 'fuzzy Matematika Terapan 2<br>'.$kurang_mt2."<br>".$cukup_mt2."<br>".$baik_mt2."<br>".$sangat_mt2.'<br>';
                            echo 'fuzzy Fisika Terapan<br>'.$kurang_ft."<br>".$cukup_ft."<br>".$baik_ft."<br>".$sangat_ft.'<br>';
                            echo 'fuzzy Hidrolika 1<br>'.$kurang_h1."<br>".$cukup_h1."<br>".$baik_h1."<br>".$sangat_h1.'<br>';
                            echo 'fuzzy Mekanika Tanah 1<br>'.$kurang_mekt1."<br>".$cukup_mekt1."<br>".$baik_mekt1."<br>".$sangat_mekt1.'<br>';
                            echo 'fuzzy Ilmu Ukur Tanah 2<br>'.$kurang_iut2."<br>".$cukup_iut2."<br>".$baik_iut2."<br>".$sangat_iut2.'<br>';





                            // Step 3 Komposisi Aturan Fuzzy
               $a1 = 80;$a2 = 73;$a3 = 67;$a4 = 60;$a5 = 73;$a6 = 66;$a7 = 60;$a8 = 53;$a9 = 67;$a10 = 60;
              $a11 = 54;$a12 = 47;$a13 = 60;$a14 = 53;$a15 = 47;$a16 = 40;$a17 = 80;$a18 = 73;$a19 = 67;$a20 = 60;
              $a21 = 73;$a22 = 66;$a23 = 60;$a24 = 53;$a25 = 67;$a26 = 60;$a27 = 54;$a28 = 47;$a29 = 60;$a30 = 53;
              $a31 = 47;$a32 = 40;$a33 = 80;$a34 = 73;$a35 = 67;$a36 = 60;$a37 = 73;$a38 = 66;$a39 = 60;$a40 = 53;
              $a41 = 67;$a42 = 60;$a43 = 54;$a44 = 47;$a45 = 60;$a46 = 53;$a47 = 47;$a48 = 40;

                            // Rule Daerah Fuzzy (Metode Sugeno)
                            // Rule Penjurusan Bangunan Gedung
                            
                            $rule_2   = min($sangat_mk2,$baik_mt2);
                            $rule_3   = min($sangat_mk2,$cukup_mt2);
                            $rule_4   = min($sangat_mk2,$kurang_mt2);
                            $rule_5   = min($baik_mk2,$sangat_mt2);
                            $rule_6   = min($baik_mk2,$baik_mt2);
                            $rule_7   = min($baik_mk2,$cukup_mt2);
                            $rule_8   = min($baik_mk2,$kurang_mt2);
                            $rule_9   = min($cukup_mk2,$sangat_mt2);
                            $rule_10  = min($cukup_mk2,$baik_mt2);
                            $rule_11  = min($cukup_mk2,$cukup_mt2);
                            $rule_12  = min($cukup_mk2,$kurang_mt2);
                            $rule_13  = min($kurang_mk2,$sangat_mt2);
                            $rule_14  = min($kurang_mk2,$baik_mt2);
                            $rule_15  = min($kurang_mk2,$cukup_mt2);
                            $rule_16  = min($kurang_mk2,$kurang_mt2);

                            //Rule Penjurusan Bangunan Air
                            $rule_17  = min($sangat_ft,$sangat_h1);
                            $rule_18  = min($sangat_ft,$baik_h1);
                            $rule_19  = min($sangat_ft,$cukup_h1);
                            $rule_20  = min($sangat_ft,$kurang_h1);
                            $rule_21  = min($baik_ft,$sangat_h1);
                            $rule_22  = min($baik_ft,$baik_h1);
                            $rule_23  = min($baik_ft,$cukup_h1);
                            $rule_24  = min($baik_ft,$kurang_h1);
                            $rule_25  = min($cukup_ft,$sangat_h1);
                            $rule_26  = min($cukup_ft,$baik_h1);
                            $rule_27  = min($cukup_ft,$cukup_h1);
                            $rule_28  = min($cukup_ft,$kurang_h1);
                            $rule_29  = min($kurang_ft,$sangat_h1);
                            $rule_30  = min($kurang_ft,$baik_h1);
                            $rule_31  = min($kurang_ft,$cukup_h1);
                            $rule_32  = min($kurang_ft,$kurang_h1);

                            //Rule Penjurusan Bangunan Transportasi
                            $rule_33  = min($sangat_mekt1,$sangat_iut2);
                            $rule_34  = min($sangat_mekt1,$baik_iut2);
                            $rule_35  = min($sangat_mekt1,$cukup_iut2);
                            $rule_36  = min($sangat_mekt1,$kurang_iut2);
                            $rule_37  = min($baik_mekt1,$sangat_iut2);
                            $rule_38  = min($baik_mekt1,$baik_iut2);
                            $rule_39  = min($baik_mekt1,$cukup_iut2);
                            $rule_40  = min($baik_mekt1,$kurang_iut2);
                            $rule_41  = min($cukup_mekt1,$sangat_iut2);
                            $rule_42  = min($cukup_mekt1,$baik_iut2);
                            $rule_43  = min($cukup_mekt1,$cukup_iut2);
                            $rule_44  = min($cukup_mekt1,$kurang_iut2);
                            $rule_45  = min($kurang_mekt1,$sangat_iut2);
                            $rule_46  = min($kurang_mekt1,$baik_iut2);
                            $rule_47  = min($kurang_mekt1,$cukup_iut2);
                            $rule_48  = min($kurang_mekt1,$kurang_iut2);

  // Step 4 Defuzzy fikasi
  // Defuzzyfikasi Penjurusan Bangunan Gedung
error_reporting(0);
  $recom_bngungedung = $rule_1*$a1 + $rule_2*$a2 + $rule_3*$a3 + $rule_4*$a4 + $rule_5*$a5 + $rule_6*$a6 + $rule_7*$a7 + $rule_8*$a8 + $rule_9*$a9 + $rule_10*$a10 + $rule_11*$a11 + $rule_12*$a12 + $rule_13*$a13 + $rule_14*$a14 + $rule_15*$a15 + $rule_16*$a16 / $rule_1 + $rule_2 + $rule_3 + $rule_4 + $rule_5 + $rule_6 + $rule_7 + $rule_8 + $rule_9 + $rule_10 + $rule_11 + $rule_12 + $rule_13 + $rule_14 + $rule_15 + $rule_16;

  // Defuzzyfikasi Penjurusan Bangunan Air
  echo $recom_bngunair = $rule_17*$a17 + $rule_18*$a19 + $rule_20*$a20 + $rule_21*$a21 + $rule_22*$a22 + $rule_23*$a23 + $rule_24*$a24 + $rule_25*$a825 + $rule_26*$a26 + $rule_27*$a27 + $rule_28*$a28 + $rule_29*$a29 + $rule_30*$a30 + $rule_31*$a31 + $rule_32*$a32 + $rule_33*$a33 / $rule_17 + $rule_18 + $rule_19 + $rule_20 + $rule_21 + $rule_22 + $rule_23 + $rule_24 + $rule_25 + $rule_26 + $rule_27 + $rule_28 + $rule_29 + $rule_30 + $rule_31 + $rule_32;    

  // Defuzzyfikasi Penjurusan Bangunan Transportasi





  // Step 4 Defuzzy fikasi
  // Defuzzyfikasi Penjurusan Bangunan Gedung
error_reporting(0);

  // Defuzzyfikasi Penjurusan Bangunan Air
  $recom_bngunair = $rule_17*$a17 / $rule_17;
  echo '<br>'.$recom_bngunair.'<br>';    

  // Defuzzyfikasi Penjurusan Bangunan Transportasi
  echo $recom_bnguntrans  = $rule_33*$a33 + $rule_37*$a37 / $rule_33+$rule_37;




							// Rule Penjurusan Bangunan Gedung
                            if ($rule_1   = min($sangat_mk2,$sangat_mt2) != 0) {
                              echo $a1 = 80;
                            }if ($rule_2   = min($sangat_mk2,$baik_mt2) != 0) {
                              echo $a2 = 73;
                            }if ($rule_3   = min($sangat_mk2,$cukup_mt2) != 0) {
                              echo $a3 = 67;
                            }if ($rule_4   = min($sangat_mk2,$kurang_mt2) != 0) {
                              echo $a4 = 60;
                            }if ($rule_5   = min($baik_mk2,$sangat_mt2) != 0) {
                              echo $a5 = 73;
                            }if ($rule_6   = min($baik_mk2,$baik_mt2) != 0) {
                              echo $a6 = 66;
                            }if ($rule_7   = min($baik_mk2,$cukup_mt2) != 0) {
                              echo $a7 = 60;
                            }if ($rule_8   = min($baik_mk2,$kurang_mt2) != 0) {
                              echo $a8 = 53;
                            }if ($rule_9   = min($cukup_mk2,$sangat_mt2) != 0) {
                              echo $a9 = 67;
                            }if ($rule_10  = min($cukup_mk2,$baik_mt2) != 0) {
                              echo $a10 = 60;
                            }if ($rule_11  = min($cukup_mk2,$cukup_mt2) != 0) {
                              echo $a11 = 54;
                            }if ($rule_12  = min($cukup_mk2,$kurang_mt2) != 0) {
                              echo $a12 = 47;
                            }if ($rule_13  = min($kurang_mk2,$sangat_mt2) != 0) {
                              echo $a13 = 60;
                            }if ($rule_14  = min($kurang_mk2,$baik_mt2) != 0) {
                              echo $a14 = 53;
                            }if ($rule_15  = min($kurang_mk2,$cukup_mt2) != 0) {
                              echo $a15 = 47;
                            }if ($rule_16  = min($kurang_mk2,$kurang_mt2) != 0) {
                              echo $a16 = 40;
                            }
                            //Rule Penjurusan Bangunan Air
                            if ($rule_17  = min($sangat_ft,$sangat_h1) != 0) {
                              echo $a17 = 80;
                            }if ($rule_18  = min($sangat_ft,$baik_h1) != 0) {
                              echo $a18 = 73;
                            }if ($rule_19  = min($sangat_ft,$cukup_h1) != 0) {
                              echo $a19 = 67;
                            }if ($rule_20  = min($sangat_ft,$kurang_h1) != 0) {
                              echo $a20 = 60;
                            }if ($rule_21  = min($baik_ft,$sangat_h1) != 0) {
                              echo $a21 = 73;
                            }if ($rule_22  = min($baik_ft,$baik_h1) != 0) {
                              echo $a22 = 66;
                            }if ($rule_23  = min($baik_ft,$cukup_h1) != 0) {
                              echo $a23 = 60;
                            }if ($rule_24  = min($baik_ft,$kurang_h1) != 0) {
                              echo $a24 = 53;
                            }if ($rule_25  = min($cukup_ft,$sangat_h1) != 0 ) {
                              echo $a25 = 67;
                            }if ($rule_26  = min($cukup_ft,$baik_h1) != 0) {
                              echo $a26 = 60;
                            }if ($rule_27  = min($cukup_ft,$cukup_h1) != 0) {
                              echo $a27 = 54;
                            }if ($rule_28  = min($cukup_ft,$kurang_h1) != 0) {
                              echo $a28 = 47;
                            }if ($rule_29  = min($kurang_ft,$sangat_h1) != 0) {
                              echo $a29 = 60;
                            }if ($rule_30  = min($kurang_ft,$baik_h1) != 0) {
                              echo $a30 = 53;
                            }if ($rule_31  = min($kurang_ft,$cukup_h1) != 0) {
                              echo $a31 = 47;
                            }if ($rule_32  = min($kurang_ft,$kurang_h1) != 0) {
                              echo $a32 = 40;
                            }
                            //Rule Penjurusan Bangunan Transportasi
                            if ($rule_33  = min($sangat_mekt1,$sangat_iut2) != 0) {
                              echo $a33 = 80;
                            }if ($rule_34  = min($sangat_mekt1,$baik_iut2) != 0) {
                              echo $a34 = 73;
                            }if ($rule_35  = min($sangat_mekt1,$cukup_iut2) != 0) {
                              echo $a35 = 67;
                            }if ($rule_36  = min($sangat_mekt1,$kurang_iut2) != 0) {
                              echo $a36 = 60;
                            }if ($rule_37  = min($baik_mekt1,$sangat_iut2) != 0) {
                              echo $a37 = 73;
                            }if ($rule_38  = min($baik_mekt1,$baik_iut2) != 0) {
                              echo $a38 = 66;
                            }if ($rule_39  = min($baik_mekt1,$cukup_iut2) != 0) {
                              echo $a39 = 60;
                            }if ($rule_40  = min($baik_mekt1,$kurang_iut2) != 0) {
                              echo $a40 = 53;
                            }if ($rule_41  = min($cukup_mekt1,$sangat_iut2) != 0) {
                              echo $a41 = 67;
                            }if ($rule_42  = min($cukup_mekt1,$baik_iut2) != 0) {
                              echo $a42 = 60;
                            }if ($rule_43  = min($cukup_mekt1,$cukup_iut2) != 0) {
                              echo $a43 = 54;
                            }if ($rule_44  = min($cukup_mekt1,$kurang_iut2) != 0) {
                              echo $a44 = 47;
                            }if ($rule_45  = min($kurang_mekt1,$sangat_iut2) != 0) {
                              echo $a45 = 60;
                            }if ($rule_46  = min($kurang_mekt1,$baik_iut2) != 0) {
                              echo $a46 = 53;
                            }if ($rule_47  = min($kurang_mekt1,$cukup_iut2) != 0) {
                              echo $a47 = 47;
                            }if ($rule_48  = min($kurang_mekt1,$kurang_iut2) != 0) {
                              echo $a48 = 40;
                            }
  ?>


        <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Box Isi Data-->
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>No Induk Mahasiswa</center></th>
                <!--<th><center>Daftar Mata Kuliah</center></th> -->
                    <th><center>IPK</center></th>
                    <th><center>Hasil Algoritma Fuzzy Sugeno</center></th>
                    <th><center>Rekomendasi Sistem</center></th>
                   </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    foreach($mhs->result_array() as $data){?>
                      <tr>
                        <td width="20px"><center><?php echo $no;?></center></td>
                        <td width="160px"><center><?php echo $data['nim'];?></center></td>
                    <!--<td>
                          <table class="table table-bordered table-striped">
                            <tr class="bg-green">
                              <td width="100px"><center>
                                <b>Kode MK</b></center>
                              </td>
                              <td width="400px"><center>
                                <b>Nama MK</b></center>
                              </td>
                              <td width="10px" colspan="2"><center>
                                <b>Nilai</b></center>
                              </td>
                            </tr>
                        <?php foreach($all_penilaian->result_array() as $all){
                            if($all['nim']==$data['nim']) {?>
                            <tr>
                              <td><center>
                                <?php echo $all['kode_mk'];?></center>
                              </td>
                              <td>
                                <?php echo $all['nama_mk'];?>
                              </td>
                              <td><center>
                                <?php echo $all['nilai_angka'];?></center>
                              </td>
                              <td><center>
                                <?php echo $all['nilai_huruf'];?></center>
                              </td>
                            </tr>
                          <?php }} ?>
                          </table>
                        </td> -->
                        <td width="20px"><center>
                              <b><?php echo number_format($data['ipk'],2); ?></b>
                        </center></td>
                        <td width="500px"><center>

                            <?php foreach($angkabyid->result_array() as $ni){
                              error_reporting(0);
                              // Step 2)  Pembentukan Fungsi Keanggotaan
                              // Representasi Rule Bangunan Gedung
                              //    Mekanika Rekayasa 2
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131209'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_mk2 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_mk2 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_mk2 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_mk2 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_mk2 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_mk2 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_mk2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_mk2 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_mk2 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_mk2 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_mk2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_mk2 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_mk2 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_mk2 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_mk2 = 1;
                                 }
                              }
                              //    Matematika Terapan 2
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131205'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_mt2 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_mt2 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_mt2 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    echo $cukup_mt2 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_mt2 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_mt2 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_mt2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_mt2 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_mt2 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_mt2 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_mt2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_mt2 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_mt2 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_mt2 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_mt2 = 1;
                                 }
                              }
                              // Representasi Rule Bangunan Air
                              //    Fisika Terapan
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131103'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_ft = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_ft = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_ft = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_ft = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_ft = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_ft = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_ft = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_ft = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_ft = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_ft = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_ft = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_ft = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_ft = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_ft = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_ft = 1;
                                 }
                              }
                              //    Hidrolika 1
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131211'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_h1 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_h1 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_h1 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_h1 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_h1 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_h1 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_h1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_h1 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_h1 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_h1 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_h1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_h1 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_h1 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_h1 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_h1 = 1;
                                 }
                              }
                              // Representasi Rule Transportasi
                              //    Mekanika Tanah 1
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131212'){
                                    $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_mekt1 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_mekt1 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_mekt1 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_mekt1 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_mekt1 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_mekt1 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_mekt1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_mekt1 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_mekt1 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_mekt1 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_mekt1 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_mekt1 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_mekt1 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_mekt1 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_mekt1 = 1;
                                 }
                              }
                              //    Ilmu Ukur Tanah 2
                              if($ni['nim']==$data['nim'] AND $ni['kode_mk']=='TS131215'){
                                   $rec_data = $ni['nilai_angka']."<br>";
                                 //    Derajat keanggotaan untuk rentang KURANG
                                 if($rec_data <= '40') {
                                       $kurang_iut2 = 1;
                                    }elseif ('40' >= $rec_data OR $rec_data <= '54') {
                                       $kurang_iut2 = (54-$rec_data)/(54-40);
                                    }elseif ($rec_data >= '54') {
                                       $kurang_iut2 = 0;
                                    }
                                 //    Derajat keanggotaan untuk rentang CUKUP
                                 if ($rec_data <= '40') {
                                    $cukup_iut2 = 0;
                                 }elseif ('40' <= $rec_data AND $rec_data <= '54') {
                                    $cukup_iut2 = ($rec_data-40)/(54-40);
                                 }elseif ('54' >= $rec_data OR $rec_data <= '66') {
                                    $cukup_iut2 = (66-$rec_data)/(66-54);
                                 }elseif ($rec_data >= '66') {
                                    $cukup_iut2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Baik
                                 if ($rec_data <= '54') {
                                    $baik_iut2 = 0;
                                 }elseif ('54' <= $rec_data AND $rec_data <= '66') {
                                    $baik_iut2 = ($rec_data-54)/(66-54);
                                 }elseif ('66' >= $rec_data OR $rec_data <= '80') {
                                    $baik_iut2 = (80-$rec_data)/(80-66);
                                 }elseif ($rec_data >= '80') {
                                    $baik_iut2 = 0;
                                 }
                                 //    Derajat keanggotaan untuk rentang Sangat Baik
                                 if ($rec_data <= '66') {
                                    $sangat_iut2 = 0;
                                 }elseif ('66' <= $rec_data AND $rec_data <= '80') {
                                    $sangat_iut2 = ($rec_data-66)/(80-66);
                                 }elseif ('80' >= $rec_data OR $rec_data <= '100') {
                                    $sangat_iut2 = (80-$rec_data)/(100-80);
                                 }elseif ($rec_data >= '100') {
                                    $sangat_iut2 = 1;
                                 }
                              }
                            }

                            // Step 3 Komposisi Aturan Fuzzy
                            
                            //Alpa Predikat Penjurusan Bangunan Gedung
                            $apre_1   = min($sangat_mk2,$sangat_mt2);         $apre_2   = min($sangat_mk2,$baik_mt2);
                            $apre_3   = min($sangat_mk2,$cukup_mt2);          $apre_4   = min($sangat_mk2,$kurang_mt2);
                            $apre_5   = min($baik_mk2,$sangat_mt2);           $apre_6   = min($baik_mk2,$baik_mt2);
                            $apre_7   = min($baik_mk2,$cukup_mt2);            $apre_8   = min($baik_mk2,$kurang_mt2);
                            $apre_9   = min($cukup_mk2,$sangat_mt2);          $apre_10  = min($cukup_mk2,$baik_mt2);
                            $apre_11  = min($cukup_mk2,$cukup_mt2);           $apre_12  = min($cukup_mk2,$kurang_mt2);
                            $apre_13  = min($kurang_mk2,$sangat_mt2);         $apre_14  = min($kurang_mk2,$baik_mt2);
                            $apre_15  = min($kurang_mk2,$cukup_mt2);          $apre_16  = min($kurang_mk2,$kurang_mt2);
                            //Alpa Predikat Penjurusan Bangunan Air
                            $apre_17  = min($sangat_ft,$sangat_h1);           $apre_18  = min($sangat_ft,$baik_h1);
                            $apre_19  = min($sangat_ft,$cukup_h1);            $apre_20  = min($sangat_ft,$kurang_h1);
                            $apre_21  = min($baik_ft,$sangat_h1);             $apre_22  = min($baik_ft,$baik_h1);
                            $apre_23  = min($baik_ft,$cukup_h1);              $apre_24  = min($baik_ft,$kurang_h1);
                            $apre_25  = min($cukup_ft,$sangat_h1);            $apre_26  = min($cukup_ft,$baik_h1);
                            $apre_27  = min($cukup_ft,$cukup_h1);             $apre_28  = min($cukup_ft,$kurang_h1);
                            $apre_29  = min($kurang_ft,$sangat_h1);           $apre_30  = min($kurang_ft,$baik_h1);
                            $apre_31  = min($kurang_ft,$cukup_h1);            $apre_32  = min($kurang_ft,$kurang_h1);
                            //Alpa Predikat Penjurusan Bangunan Transportasi
                            $apre_33  = min($sangat_mekt1,$sangat_iut2);      $apre_34  = min($sangat_mekt1,$baik_iut2);
                            $apre_35  = min($sangat_mekt1,$cukup_iut2);       $apre_36  = min($sangat_mekt1,$kurang_iut2);
                            $apre_37  = min($baik_mekt1,$sangat_iut2);        $apre_38  = min($baik_mekt1,$baik_iut2);
                            $apre_39  = min($baik_mekt1,$cukup_iut2);         $apre_40  = min($baik_mekt1,$kurang_iut2);
                            $apre_41  = min($cukup_mekt1,$sangat_iut2);       $apre_42  = min($cukup_mekt1,$baik_iut2);
                            $apre_43  = min($cukup_mekt1,$cukup_iut2);        $apre_44  = min($cukup_mekt1,$kurang_iut2);
                            $apre_45  = min($kurang_mekt1,$sangat_iut2);      $apre_46  = min($kurang_mekt1,$baik_iut2);
                            $apre_47  = min($kurang_mekt1,$cukup_iut2);       $apre_48  = min($kurang_mekt1,$kurang_iut2);
                            
                            // Rule Daerah Fuzzy (Metode Sugeno)
                            // Rule Penjurusan Bangunan Gedung
                            if ($sangat_mk2 AND $sangat_mt2) {
                              $z1 = 80;
                            }if ($sangat_mk2 AND $baik_mt2) {
                              $z2 = 73;
                            }if ($sangat_mk2 AND $cukup_mt2) {
                              $z3 = 67;
                            }if ($sangat_mk2 AND $kurang_mt2) {
                              $z4 = 60;
                            }if ($baik_mk2 AND $sangat_mt2) {
                              $z5 = 73;
                            }if ($baik_mk2 AND $baik_mt2) {
                              $z6 = 66;
                            }if ($baik_mk2 AND $cukup_mt2) {
                              $z7 = 60;
                            }if ($baik_mk2 AND $kurang_mt2) {
                              $z8 = 53;
                            }if ($cukup_mk2 AND $sangat_mt2) {
                              $z9 = 67;
                            }if ($cukup_mk2 AND $baik_mt2) {
                              $z10 = 60;
                            }if ($cukup_mk2 AND $cukup_mt2) {
                              $z11 = 54;
                            }if ($cukup_mk2 AND $kurang_mt2) {
                              $z12 = 47;
                            }if ($kurang_mk2 AND $sangat_mt2) {
                              $z13 = 60;
                            }if ($kurang_mk2 AND $baik_mt2) {
                              $z14 = 53;
                            }if ($kurang_mk2 AND $cukup_mt2) {
                              $z15 = 47;
                            }if ($kurang_mk2 AND $kurang_mt2) {
                              $z16 = 40;
                            }
                            //Rule Penjurusan Bangunan Air
                            if ($sangat_ft AND $sangat_h1) {
                              $z17 = 80;
                            }if ($sangat_ft AND $baik_h1) {
                              $z18 = 73;
                            }if ($sangat_ft AND $cukup_h1) {
                              $z19 = 67;
                            }if ($sangat_ft AND $kurang_h1) {
                              $z20 = 60;
                            }if ($baik_ft AND $sangat_h1) {
                              $z21 = 73;
                            }if ($baik_ft AND $baik_h1) {
                              $z22 = 66;
                            }if ($baik_ft AND $cukup_h1) {
                              $z23 = 60;
                            }if ($baik_ft AND $kurang_h1) {
                              $z24 = 53;
                            }if ($cukup_ft AND $sangat_h1 ) {
                              $z25 = 67;
                            }if ($cukup_ft AND $baik_h1) {
                              $z26 = 60;
                            }if ($cukup_ft AND $cukup_h1) {
                              $z27 = 54;
                            }if ($cukup_ft AND $kurang_h1) {
                              $z28 = 47;
                            }if ($kurang_ft AND $sangat_h1) {
                              $z29 = 60;
                            }if ($kurang_ft AND $baik_h1) {
                              $z30 = 53;
                            }if ($kurang_ft AND $cukup_h1) {
                              $z31 = 47;
                            }if ($kurang_ft AND $kurang_h1) {
                              $z32 = 40;
                            }
                            //Rule Penjurusan Bangunan Transportasi
                            if ($sangat_mekt1 AND $sangat_iut2) {
                              $z33 = 80;
                            }if ($sangat_mekt1 AND $baik_iut2) {
                              $z34 = 73;
                            }if ($sangat_mekt1 AND $cukup_iut2) {
                              $z35 = 67;
                            }if ($sangat_mekt1 AND $kurang_iut2) {
                              $z36 = 60;
                            }if ($baik_mekt1 AND $sangat_iut2) {
                              $z37 = 73;
                            }if ($baik_mekt1 AND $baik_iut2) {
                              $z38 = 66;
                            }if ($baik_mekt1 AND $cukup_iut2) {
                              $z39 = 60;
                            }if ($baik_mekt1 AND $kurang_iut2) {
                              $z40 = 53;
                            }if ($cukup_mekt1 AND $sangat_iut2) {
                              $z41 = 67;
                            }if ($cukup_mekt1 AND $baik_iut2) {
                              $z42 = 60;
                            }if ($cukup_mekt1 AND $cukup_iut2) {
                              $z43 = 54;
                            }if ($cukup_mekt1 AND $kurang_iut2) {
                              $z44 = 47;
                            }if ($kurang_mekt1 AND $sangat_iut2) {
                              $z45 = 60;
                            }if ($kurang_mekt1 AND $baik_iut2) {
                              $z46 = 53;
                            }if ($kurang_mekt1 AND $cukup_iut2) {
                              $z47 = 47;
                            }if ($kurang_mekt1 AND $kurang_iut2) {
                              $a48 = 40;
                            }
                            
  // Step 4 Defuzzy fikasi Sugeno
  // Defuzzyfikasi Penjurusan Bangunan Gedung
  $recom_bngungdng = number_format($apre_1*$z1 + $apre_2*$z2 + $apre_3*$z3 + $apre_4*$z4 + $apre_5*$z5 + $apre_6*$z6 + $apre_7*$z7 + $apre_8*$z8 + $apre_9*$z9 + $apre_10*$z10 + $apre_11*$z11 + $apre_12*$z12 + $apre_13*$z13 + $apre_14*$z14 + $apre_15*$z15 + $apre_16*$z16,2)  / number_format($apre_1 + $apre_2 + $apre_3 + $apre_4 + $apre_5 + $apre_6 + $apre_7 + $apre_8 + $apre_9 + $apre_10 + $apre_11 + $apre_12 + $apre_13 + $apre_14 + $apre_15 + $apre_16,2);

  // Defuzzyfikasi Penjurusan Bangunan Air
  $recom_bngunair = number_format(($apre_17*$z17) + ($apre_18*$z18) + ($apre_19*$z19) + ($apre_20*$z20) + ($apre_21*$z21) + ($apre_22*$z22) + ($apre_23*$z23) + ($apre_24*$z24) + ($apre_25*$z25) + ($apre_26*$z26) + ($apre_27*$z27) + ($apre_28*$z28) + ($apre_29*$z29) + ($apre_30*$z30) + ($apre_31*$z31) + ($apre_32*$z32),2) / number_format($apre_17 + $apre_18 + $apre_19 + $apre_20 + $apre_21 + $apre_22 + $apre_23 + $apre_24 + $apre_25 + $apre_26 + $apre_27 + $apre_28 + $apre_29 + $apre_30 + $apre_31 + $apre_32,2);

  // Defuzzyfikasi Penjurusan Bangunan Transportasi
  $recom_bnguntrans  = number_format($apre_33*$z33 + $apre_34*$z34 + $apre_35*$z35 + $apre_36*$z36 + $apre_37*$z37 + $apre_38*$z38 + $apre_39*$z39 + $apre_40*$z40 + $apre_41*$z41 + $apre_42*$z42 + $apre_42*$z42 + $apre_43*$z43 + $apre_44*$z44 + $apre_45*$z45 + $apre_46*$z46 + $apre_47*$z47 + $apre_48*$z48,2) / number_format($apre_33 + $apre_34 + $apre_35 + $apre_36 + $apre_37 + $apre_38 + $apre_39 + $apre_40 + $apre_41 + $apre_42 + $apre_43 + $apre_44 + $apre_45 + $apre_46 + $apre_47 + $apre_48,2);
                           ?>
                            <?php
                                $ip = number_format($data['ipk'],2);
                            if ($ip > 3.50) {?>
                              <table class="table table-bordered table-striped">
                                <tr class="bg-yellow">
                                  <td><center>
                                    <b>Konsentrasi Bangunan Gedung</b></center>
                                  </td>
                                  <td><center>
                                    <b>Konsentrasi Bangunan Air</b></center>
                                  </td>
                                  <td><center>
                                    <b>Konsentrasi Bangunan Transportasi</b></center>
                                  </td>
                                </tr>
                                <tr>
                                  <td ><center><b>
                                    <?php echo number_format($recom_bngungdng,1).' %';?></center>
                                  </td>
                                  <td ><center><b>
                                    <?php echo number_format($recom_bngunair,1).' %';?></center>
                                  </td>
                                  <td ><center><b>
                                    <?php echo number_format($recom_bnguntrans,1).' %';?></center>
                                  </td>
                                </tr>
                              </table>
                           <?php 
                            }
                            if ($ip < 3.50) {?>
                              <table class="table table-bordered table-striped">
                                <tr class="bg-yellow">
                                  <td><center>
                                    <b>Konsentrasi Bangunan Air</b></center>
                                  </td>
                                  <td><center>
                                    <b>Konsentrasi Bangunan Transportasi</b></center>
                                  </td>
                                </tr>
                                <tr>
                                  <td ><center><b>
                                    <?php echo number_format($recom_bngunair,1).' %';?></center>
                                  </td>
                                  <td ><center><b>
                                    <?php echo number_format($recom_bnguntrans,1).' %';?></center>
                                  </td>
                                </tr>
                              </table>
                           <?php 
                            }
                            ?>
                          </center>
                        </td>
                        <td><center>
                            <?php
                                $ip = number_format($data['ipk'],2);
                            if ($ip > 3.50) {
                              if ($recom_bngungdng > $recom_bngunair AND $recom_bngungdng > $recom_bnguntrans) {
                                  echo "Konsentrasi Bangunan Gedung";
                                }elseif ($recom_bngunair > $recom_bngungdng AND $recom_bngunair > $recom_bnguntrans) {
                                  echo "Konsentrasi Bangunan Air";
                                }elseif ($recom_bnguntrans > $recom_bngungdng AND $recom_bnguntrans > $recom_bngunair) {
                                  echo "Konsentrasi Bangunan Transportasi";
                                }
                            }
                            if ($ip < 3.50) {
                              if ($recom_bngunair > $recom_bnguntrans) {
                                  echo "Konsentrasi Bangunan Air";
                                }elseif ($recom_bnguntrans > $recom_bngunair) {
                                  echo "Konsentrasi Bangunan Transportasi"  ;
                                }
                            }
                            ?>
                            </center>
                        </td>
                      </tr>
                    <?php $no++;
                      }?>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
            </div>
          </div>
        </section>
      </div>
    </section>