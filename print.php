<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Printable Report Test</title>
  </head>
  <body>

    <div id="container">

      <div class="row">

        <div class="col-7" style="border-style: solid;">
          <span style="font-size: 18.5px;">Canada-Africa Community Health Alliance</span><br>
          <span style="font-size: 18px;">Alliance de Sante Communitaire Canada-Afrique</span><br>
          Triage: <input disabled type="text" id="txtTriage" name="Triage" value="Sample Text" style="width: 200px"><span style="padding-left: 10px;"><input type="checkbox" id="chkTesting" name="Testing" value="TEST" disabled>TESTING</span><br>
          Triage: &nbsp;<input type="checkbox" id="chkMed" name="Med" value="MED" disabled>MED&nbsp;
          <input type="checkbox" id="chkGyn" name="Gyn" value="GYN" disabled>GYN&nbsp;
          <input type="checkbox" id="chkOpht" name="Opht" value="OPHT" disabled>OPHT&nbsp;
          <input type="checkbox" id="chkDent" name="Dent" value="DENT" disabled>DENT&nbsp;
          <input type="checkbox" id="chkV" name="V" value="V" disabled>V
        </div>

        <div class="col-5" style="border-style: solid;">
          CHART#: <input disabled type="text" id="txtChart" name="Chart" value="189" style="width: 50px"><br>
          DISPENSARY: <input disabled type="text" id="txtDispensary" name="Dispensary" value="Truro N.S." style="width: 150px"><br>
          <br>
          <span style="font-size: 18.5px;">TIME:<input disabled type="text" id="txtTime" name="Time" value="3:32PM" style="width: 75px">
          DATE: <input disabled type="text" id="txtDate" name="Date" value="10/03/17" style="width: 85px"></span>
        </div>

      </div>

      <div class="row">

        <div class ="col-6" style="border-style: solid;">
          Name: <input disabled type="text" id="txtName" name="Name" value="Ryan Oakley" style="width: 200px"><br>
          Village: <input disabled type="text" id="txtVillage" name="Village" value="Cole Harbour" style="width: 200px"><br>
          <span style="padding-right: 65px;">G: <input disabled type="text" id="txtG" name="G" value="10" style="width: 30px"></span>
          <span style="padding-right: 65px;">P: <input disabled type="text" id="txtP" name="P" value="10" style="width: 30px"></span>
          <span style="padding-right: 65x;">A: <input disabled type="text" id="txtA" name="A" value="10" style="width: 30px"></span><br>
          <span style="padding-right: 5px;">#Living Children: <input disabled type="text" id="txtLiving" name="Living" value="0" style="width: 30px"></span>
          LNMP: <input disabled type="text" id="txtLnmp" name="Lnmp" value="8W" style="width: 50px">
        </div>

        <div class ="col-6" style="border-style: solid;">
          <span style="padding-right: 5px;"><input type="checkbox" id="chkMale" name="Male" value="MALE" disabled>M</span>
          <span style="padding-right: 5px;"><input type="checkbox" id="chkFemale" name="Female" value="FEMALE" disabled>F</span>
          <span style="padding-right: 20px;">AGE: <input disabled type="text" id="txtAge" name="Age" value="34" style="width: 30px"></span>
          <span style="padding-right: 5px;">WEIGHT: <input disabled type="text" id="txtWeight" name="Weight" value="97.5" style="width: 50px"></span>KG<br>
          <span style="padding-right: 50px;">TEMP: <input disabled type="text" id="txtTemp" name="Temp" value="98.6" style="width: 50px">&#8457;</span>
          BP: <input disabled type="text" id="txtBP" name="BP" value="120/70" style="width: 70px"><br><br>
          <span style="padding-right: 50px;">GLUCOSE: <input disabled type="text" id="txtGlucose" name="Glucose" value="4.0" style="width: 50px"></span>
          HR: <input disabled type="text" id="txtHr" name="HR" value="70" style="width: 50px">
        </div>

      </div>

      <div class="row">

        <div class="col-6" style="border-style: solid; height: 300px;">
          Chief Complaint:<br>
          <textarea disabled id="txtComplaint" name="Complaint" wrap="soft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat feugiat vestibulum. Etiam augue urna, bibendum sit amet vehicula sed, venenatis tristique ipsum.
          </textarea>
        </div>

        <div class="col-6" style="border-style: solid;">

          <div class="row">

            <div class="col-6" style="text-align: center;">
              <span style="padding-right: 50px;"><input type="checkbox" id="chkPregnant" name="YPreg" value="PREGNANT" disabled>Pregnant</span>
            </div>

            <div class="col-6" style="text-align: center;">
              <span style="padding-right: 5px;"><input type="checkbox" id="chkBreastfeeding" name="Breastfeeding" value="BREASTFEEDING" disabled>Breastfeeding</span><br>
            </div>

          </div>

          <hr style="border-width: 2px; margin: 0;">

          <div class="row">

            <div class="col-4" style="text-align: center;">
              <input type="checkbox" id="chkVresult" name="Vresult1" value="VRESULT" disabled>V<br>
              <input disabled type="text" id="txtVresult" name="Vresuult2" value="Result" style="width: 80px">
            </div>

            <div class="col-4" style="text-align: center;">
              <input type="checkbox" id="chkMalaria" name="Malria1" value="MALRIA" disabled>MALARIA<br>
              <input disabled type="text" id="txtMalaria" name="Malria2" value="Result" style="width: 80px">
            </div>

            <div class="col-4" style="text-align: center;">
              <input type="checkbox" id="chkSyphilis" name="Syphilis1" value="SYPHILIS" disabled>SYPHILIS<br>
              <input disabled type="text" id="txtSyphilis" name="Syphilis2" value="Result" style="width: 80px">
            </div>

          </div>

          <div class="row">

            <div class="col-6" style="text-align: center;">
              <input type="checkbox" id="chkTyph" name="TYPH1" value="TYPH" disabled>TYPH<br>
              <input disabled type="text" id="txtTyph" name="Typh2" value="Result" style="width: 80px">
            </div>

            <div class="col-6" style="text-align: center;">
              <input type="checkbox" id="chkPregnancy" name="Pregnancy1" value="PREGNANCY" disabled>PREGNANCY<br>
              <input disabled type="text" id="txtPregnancy" name="Pregnancy2" value="Result" style="width: 80px">
            </div>

          </div>

          <div class="row">

            <div class="col-12" style="text-align: center;">
              <input type="checkbox" id="chkUrine" name="URINE" value="URINE" disabled>URINE<br>
            </div>

          </div>

          <div class="row">

            <div class="col-12" style="text-align: center;">
              LEUC: <input disabled type="text" id="txtLeuc" name="Leuc" value="+" style="width: 30px">
              RBC: <input disabled type="text" id="txtRBC" name="RBC" value="+" style="width: 30px">
              GLUCLOSE: <input disabled type="text" id="txtUrineglucose" name="Urineglucose" value="4.0" style="width: 30px">
              NITRITES: <input disabled type="text" id="txtNitrites" name="Nitrites" value="+" style="width: 30px">
            </div>

          </div>

        </div>

      </div>

      <div class="row" style="height: 330px">

        <div class="col-7" style="border-style: solid;">
          ASSESSMENT:<br>
          <textarea disabled id="txtAssessment" name="Assessment" wrap="soft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat feugiat vestibulum. Etiam augue urna, bibendum sit amet vehicula sed, venenatis tristique ipsum. Praesent vitae lobortis libero.
          </textarea>
        </div>

        <div class="col-5" style="border-style: solid; font-size: 17px;">
          LAST HIV TEST? <input disabled type="text" id="txtLasthiv" name="Lasthiv" value="Unknown" style="width: 100px"><br>
          LAST PZQ TX? <input disabled type="text" id="txtLastpzq" name="Lastpzq" value="Unknown" style="width: 100px"><br>
          LAST WORM TX? <input disabled type="text" id="txtLastworm" name="Lastworm" value="Unknown" style="width: 100px"><br>
          LAST VIT A? <input disabled type="text" id="txtLastvita" name="Lastvita" value="Unknown" style="width: 100px"><br>
          PREV MEDS?<br>
          <textarea disabled id="txtPrevmeds" name="Prevmeds" wrap="soft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
        </div>

      </div>

      <div class="row">

        <div class="col-6" style="border-style: solid;">
          DX:<br>
          (DON'T FORGET +, ++, or +++)<br>
          AND NTR (No Treatment)
        </div>

        <div class="col-6" style="border-style: solid;">
          ADMIN: <span style="font-size: 12px"><input type="checkbox" id="chkParacetamol" name="Paracetamol" value="PARACET" disabled>PARACETAMOL
          <input type="checkbox" id="chkBenz" name="Benz" value="BENZ" disabled>BENZ-PEN-G 2.4 MIU<br>  <input type="checkbox" id="chkCeftriaxone" name="Ceftriaxone" value="CEFTRIAXONE" disabled>CEFTRIAXONE250MG</span>
        </div>

      </div>

      <div class="row">

        <div class="col-6" style="border-style: solid;">
          <input type="checkbox" id="chkHealthy" name="Healthy" value="HEALTHY" disabled>HEALTHY
          <input type="checkbox" id="chkNtr" name="Ntr" value="NTR" disabled>NTR
          <input type="checkbox" id="chkMsk" name="Msk" value="MSK" disabled>MSK<br>
          <input type="checkbox" id="chkPlus" name="+" value="+" disabled>+
          <input type="checkbox" id="chkPlus2" name="++" value="++" disabled>++
          <input type="checkbox" id="chkPlus3" name="+++" value="+++" disabled>+++
          <input type="checkbox" id="chkWorms" name="Worms" value="WORMS" disabled>WORMS<br>
          <input type="checkbox" id="chkAsthma" name="Asthma" value="ASTHMA" disabled>ASTHMA
          <input type="checkbox" id="chkBronchitus" name="Bronchitus" value="BRONCHITUS" disabled>BRONCHITUS<br>
          <input type="checkbox" id="chkPneumonia" name="Pneumonia" value="PNEUMONIA" disabled>PNEUMONIA
          <input type="checkbox" id="chkCough" name="Cough" value="COUGH" disabled>COUGH<br>
          <input type="checkbox" id="chkMalariadx" name="Malaria" value="MALARIA" disabled>MALARIA
          <input type="checkbox" id="chkSchisto" name="Schisto" value="SCHISTO" disabled>SCHISTO
          <input type="checkbox" id="chkTyphod" name="Typhod" value="TYPHOD" disabled>TYPHOD<br>
          <input type="checkbox" id="chkGerd" name="Gerd" value="GERD" disabled>GERD
          <input type="checkbox" id="chkPud" name="Pud" value="PUD" disabled>PUD
          <input type="checkbox" id="chkConstipation" name="Constipation" value="CONSTIPATION" disabled>CONSTIPATION<br>
          <input type="checkbox" id="chkDiarrhea" name="Diarrhea" value="DIARRHEA" disabled>DIARRHEA
          <input type="checkbox" id="chkBloody" name="Bloody" value="BLOODY" disabled>BLOODY OR
          <input type="checkbox" id="chkWatery" name="Watery" value="WATERY" disabled>WATERY<br>
          <input type="checkbox" id="chkHypertension" name="Hypertension" value="HYPERTENSION" disabled>HYPERTENSION
          <input type="checkbox" id="chkDiabetes" name="Diabetes" value="DIABETES" disabled>DIABETES<br>
          <input type="checkbox" id="chkPid" name="Pid" value="PID" disabled>PID
          <input type="checkbox" id="chkSti" name="Sti" value="STI" disabled>STI
          <input type="checkbox" id="chkSyphilisdx" name="Syphilis" value="SYPHILIS" disabled>SYPHILIS<br>
          <input type="checkbox" id="chkTopical" name="Topical" value="TOPICAL" disabled>TOPICAL:<br>
          <input type="checkbox" id="chk??" name="??" value="??" disabled>
        </div>

        <div class="col-6" style="border-style: solid;">
          KIT: <span style="font-size: 12px;"><input type="checkbox" id="chkPcm" name="Pcm" value="PCM" disabled>(PCM-ALB/MEB)
          <input type="checkbox" id="chkPkit" name="Pkit" value="PREGKIT" disabled>PREGNANCY KIT(VITS+FE)</span><br>
          <input type="checkbox" id="chkAlu" name="Alu" value="ALU" disabled>ALU
          <input type="checkbox" id="chk3/7" name="3/7" value="3/7" disabled>3/7
          <input type="checkbox" id="chk1x2" name="1x2" value="1x2" disabled>1x2
          <input type="checkbox" id="chk2x2" name="2x2" value="2x2" disabled>2x2
          <input type="checkbox" id="chk3x2" name="3x2" value="3x2" disabled>3x2
          <input type="checkbox" id="chk4x2" name="4x2" value="4x2" disabled>4x2<br>
          <span style="font-size: 12px;"><input type="checkbox" id="chkPudkit" name="Pudkit" value="PUD" disabled>PUD: 7/7 AMOX250 3X2 + OMEP20 1X2+ MTZ200MG 3X2</span><br>
          <input type="checkbox" name="PZQ" value="PZQ" disabled>PZQ600mg #TABS STAT: <input disabled type="text" id="txtPzqtab" name="PzqTab" value="15" style="width: 30px">
        </div>

      </div>

      <div class="row">

        <div class="col-5" style="border-style: solid;">
          PREGNANT: <input disabled type="text" id="txtPregnant" name="Pregweeks" value="25" style="width: 30px">WEEKS<br>
          REGULAR ANC: <input type="checkbox" id="chkYanc" name="Yanc" value="ANCY" disabled>YES <input type="checkbox" id="chkNanc" name="Nanc" value="NANC" disabled>NO<br>
          PREVIOUS IPTp:<br>
          <input type="checkbox" id="chkYpiptp" name="YPiptp" value="YPIPTP" disabled>YES <input type="checkbox" id="chkNpiptp" name="Npiptp" value="NPIPTP" disabled>NEVER<br>
          LAST  IPTp:<br>
          >1 MONTH AGO <input type="checkbox" id="chkYliptp" name="YLiptp" value="YLIPTP" disabled>YES <input type="checkbox" id="chkNliptp" name="Nliptp" value="NLIPTP" disabled>NO<br>
          CLINICAL ANEMIA <input type="checkbox" id="Yanemia" name="YClinicalAnemia" value="YCANEMIA" disabled>YES <input type="checkbox" id="chkNanemia" name="NClinicalAnemia" value="NCANEMIA" disabled>NO<br>
          SULFAAR SP500/25:<br>
          TABS <input type="checkbox" id="chk3" name="3" value="3" disabled>3
          <input type="checkbox" id="chk6" name="6" value="6" disabled>6
          <input type="checkbox" id="chk9" name="9" value="9" disabled>9
        </div>

        <div class="col-7" style="border-style: solid;">




          <table style="width:100%; font-size: 15px;">

            <tr>
              <th style="width: 24%; text-align: center"><input type="checkbox" id="chkStipt" name="Stipt" value="6" disabled>STI</th>
              <th style="width: 7%">or</th>
              <th style="width: 19%; text-align: center"><input type="checkbox" id="chkPidpt" name="Pidpt" value="Pidpt" disabled>PID</th>
              <th style="width: 12.5%">#</th>
              <th style="width: 12.5%"><input disabled type="text" id="txt#pt" name="pt#" value="15" style="width: 30px"></th>
              <th style="width: 12.5%">200MG</th>
              <th style="width: 12.5%">100MG</th>
              <th style="width: 12.5%">250MG</th>
            </tr>

          </table>

          <table style="width:100%; font-size: 15px;">

            <tr>
              <th style="width: 12%"></th>
              <th style="width: 13.5%">INITIALS</th>
              <th style="width: 12%">SEX</th>
              <th style="width: 12.5%">PREG</th>
              <th style="width: 12.5%">MTH</th>
              <th style="width: 12.5%">B.F.</th>
              <th style="width: 12.5%">MTZ</th>
              <th style="width: 12.5%">DOXY</th>
              <th style="width: 12.5%">AMOX</th>
            </tr>

            <tr>
              <td style="width: 12%; text-align: center;">PT</td>
              <td style="width: 13.5%; text-align: center;"><input disabled type="text" id="txtPtinit" name="Ptinit" value="RO" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtPtsex" name="Ptsex" value="M" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtPtpreg" name="PtPreg" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtPtmth" name="Ptmth" value="9" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtPtbf" name="Ptbf" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtPtmtz" name="Ptmtz" value="14" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtPtdoxy" name="Ptdoxy" value="15" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtPtAmox" name="Ptamox" value="16" style="width: 30px"></td>
            </tr>

            <tr>
              <td style="width: 12%; text-align: center;">P1</td>
              <td style="width: 13.5%; text-align: center;"><input disabled type="text" id="txtP1init" name="P1init" value="RO" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP1sex" name="P1sex" value="M" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP1preg" name="P1Preg" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP1mth" name="P1mth" value="9" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP1bf" name="P1bf" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP1mtz" name="P1mtz" value="14" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP1doxy" name="P1doxy" value="15" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP1Amox" name="P1amox" value="16" style="width: 30px"></td>
            </tr>

            <tr>
              <td style="width: 12%; text-align: center;">P2</td>
              <td style="width: 13.5%; text-align: center;"><input disabled type="text" id="txtP2init" name="P2init" value="RO" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP2sex" name="P2sex" value="M" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP2preg" name="P2Preg" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP2mth" name="P2mth" value="9" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP2bf" name="P2bf" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP2mtz" name="P2mtz" value="14" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP2doxy" name="P2doxy" value="15" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP2Amox" name="P2amox" value="16" style="width: 30px"></td>
            </tr>

            <tr>
              <td style="width: 12%; text-align: center;">P3</td>
              <td style="width: 13.5%; text-align: center;"><input disabled type="text" id="txtP3init" name="P3init" value="RO" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP3sex" name="P3sex" value="M" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP3preg" name="P3Preg" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP3mth" name="P3mth" value="9" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP3bf" name="P3bf" value="Y" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP3mtz" name="P3mtz" value="14" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP3doxy" name="P3doxy" value="15" style="width: 30px"></td>
              <td style="width: 12.5%; text-align: center;"><input disabled type="text" id="txtP3Amox" name="P3amox" value="16" style="width: 30px"></td>
            </tr>

          </table>

        </div>

      </div>

      <div class="row">

        <div class="col-12" style="border-style: solid; height: 280px;">
          FOLLOW-UP:<br>
          <textarea disabled id="txtFollowup" name="Followup" wrap="soft">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat feugiat vestibulum. Etiam augue urna, bibendum sit amet vehicula sed, venenatis tristique ipsum.
          </textarea><br>
          <br>
          <span style="padding-right: 10px;">RETURN DURING MISSION:</span><input type="checkbox" id="chkReturnmission" name="ReturnDuringMission" value="RETURNMISSION" disabled>YES OR TO DISPENSARY> <input disabled type="text" id="txtReturnmission" name="Returnmission" value="80" style="width: 30px">DAYS
        </div>

      </div>

      <div class="row">

        <div class="col-12" style="border-style: solid; height: 200px;">
          EDUCATION: <input disabled type="text" id="txtEducation" name="Education" value="NSCC Graduate" style="width: 200px"><br>
          <br>
          PRACTITIONERS: <textarea disabled id="txtPractitioners" name="Pratitioners" wrap="soft"> Dr. Matt Redmond</textarea><br>
          <br>

          <hr style="border-width: 2px; margin: 0;">

          REFERRAL:
          <span style="padding-right: 20px; padding-left: 10px"><input type="checkbox" id="chkTB" name="TB" value="TB" disabled>TB</span>
          <span style="padding-right: 20px;"><input type="checkbox" id="chkSurgery" name="SURGERY" value="SURGERY" disabled>SURGERY</span>
          <span style="padding-right: 200px;"><input type="checkbox" id="chkHospital" name="HOSPITAL" value="HOSPITAL" disabled>HOSPITAL</span>
          RX #: <input disabled type="text" id="txtRX" name="RX" value="15" style="width: 30px">
        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../../../../assets/js/vendor/jquery.min.js"></script>
    <script src="bin/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bin/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>