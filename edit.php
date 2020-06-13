<?php include('includes/header.php'); ?>


<div class="container">
    <div class="row justify-content-center">
 
     <div class="col-md-6">
     <h1>U+ REALTY</h1>
     <?php
        $token = $_GET['token'];

        include ('includes/dbconfig.php');

        $ref = "/contact";

        $getData = $database->getReference($ref)->getChild($token)->getValue();

   
          $row =  $getData;
     ?>
     <form action="code.php" method="POST" enctype="multipart/form-data"> 
       <input type="hidden" name="token" value="<?php echo $token; ?>" ?>
      
      
       <div class="form-group">
             <input type="text" name = "id" readonly value="<?php if(isset($row['id'])) { echo ''.++$row['id']; } else { echo '0'; } ?>" class="form-control" />
        </div>

        <div class="form-group">
            <p>Classification</p>
        <select value="<?php echo $row['classification']; ?>" class="form-control" name="classification">
                <option value="Client">Client</option>
                 <option value="DF Call">DF Call</option>
              
             </select>
        </div>
        <label>Area / City</label>
        <div class="form-group">
  <select value="<?php echo $row['area']; ?>" class="form-control" name="area" id="cities">
	<option value="Caloocan">Caloocan</option>
	<option value="Las Piñas">Las Piñas</option>
	<option value="Makati ">Makati </option>
	<option value="Malabon">Malabon</option>
	<option value="Mandaluyong">Mandaluyong</option>
	<option value="Manila">Manila</option>
	<option value="Marikina">Marikina</option>
	<option value="Muntinlupa">Muntinlupa</option>
	<option value="Navotas">Navotas</option>
	<option value="Parañaque">Parañaque</option>
	<option value="Pasay">Pasay</option>
	<option value="Pasig ">Pasig </option>
	<option value="Quezon City">Quezon City</option>
	<option value="San Juan">San Juan</option>
	<option value="Taguig">Taguig</option>
	<option value="Valenzuela">Valenzuela</option>
	<option value="Butuan">Butuan</option>
	<option value="Cabadbaran">Cabadbaran</option>
	<option value="Bayugan">Bayugan</option>
	<option value="Legazpi">Legazpi</option>
	<option value="Ligao">Ligao</option>
	<option value="Tabaco">Tabaco</option>
	<option value="Isabela">Isabela</option>
	<option value="Lamitan">Lamitan</option>
	<option value="Balanga">Balanga</option>
	<option value="Batangas City">Batangas City</option>
	<option value="Lipa">Lipa</option>
	<option value="Tanauan">Tanauan</option>
	<option value="Baguio">Baguio</option>
	<option value="Tagbilaran">Tagbilaran</option>
	<option value="Malaybalay">Malaybalay</option>
	<option value="Valencia">Valencia</option>
	<option value="Malolos">Malolos</option>
	<option value="Meycauayan">Meycauayan</option>
	<option value="San Jose del Monte">San Jose del Monte</option>
	<option value="Tuguegarao">Tuguegarao</option>
	<option value="Iriga">Iriga</option>
	<option value="Naga">Naga</option>
	<option value="Roxas">Roxas</option>
	<option value="Bacoor">Bacoor</option>
	<option value="Cavite City">Cavite City</option>
	<option value="Dasmariñas">Dasmariñas</option>
	<option value="Imus">Imus</option>
	<option value="Tagaytay">Tagaytay</option>
	<option value="Trece Martires">Trece Martires</option>
	<option value="Bogo">Bogo</option>
	<option value="Carcar">Carcar</option>
	<option value="Cebu City">Cebu City</option>
	<option value="Danao">Danao</option>
	<option value="Lapu-Lapu">Lapu-Lapu</option>
	<option value="Mandaue">Mandaue</option>
	<option value="Naga">Naga</option>
	<option value="Talisay">Talisay</option>
	<option value="Toledo">Toledo</option>
	<option value="Kidapawan">Kidapawan</option>
	<option value="Panabo">Panabo</option>
	<option value="Samal">Samal</option>
	<option value="Tagum">Tagum</option>
	<option value="Davao City">Davao City</option>
	<option value="Digos">Digos</option>
	<option value="Mati">Mati</option>
	<option value="Borongan">Borongan</option>
	<option value="Batac">Batac</option>	
	<option value="Laoag">Laoag</option>	
	<option value="Candon">Candon</option>	
	<option value="Vigan">Vigan</option>	
	<option value="Iloilo City">Iloilo City</option>
	<option value="Passi">Passi</option>	
	<option value="Cauayan">Cauayan</option>	
	<option value="Ilagan">Ilagan</option>	
	<option value="Santiago">Santiago</option>
	<option value="Tabuk">Tabuk</option>	
	<option value="San Fernando">San Fernando</option>	
	<option value="Biñan">Biñan</option>	
	<option value="Cabuyao">Cabuyao</option>	
	<option value="Calamba">Calamba</option>
	<option value="San Pablo">San Pablo</option>
	<option value="Santa Rosa">Santa Rosa</option>
	<option value="San Pedro">San Pedro</option>
	<option value="Iligan">Iligan</option>	
	<option value="Marawi">Marawi</option>	
	<option value="Baybay">Baybay</option>	
	<option value="Ormoc">Ormoc</option>	
	<option value="Tacloban">Tacloban</option>	
	<option value="Cotabato City">Cotabato City</option>
	<option value="Masbate City">Masbate City</option>
	<option value="Oroquieta">Oroquieta</option>
	<option value="Ozamiz">Ozamiz</option>
	<option value="Tangub">Tangub</option>
	<option value="Cagayan de Oro">Cagayan de Oro</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Gingoog">Gingoog</option>
	<option value="Bacolod">Bacolod</option>
	<option value="Bago">Bago</option>
	<option value="Cadiz">Cadiz</option>
	<option value="Escalante">Escalante</option>
	<option value="Himamaylan">Himamaylan</option>
	<option value="Kabankalan">Kabankalan</option>
	<option value="La Carlota">La Carlota</option>
	<option value="Sagay">Sagay</option>
	<option value="San Carlos">San Carlos</option>
	<option value="Silay">Silay</option>
	<option value="Sipalay">Sipalay</option>
	<option value="Talisay">Talisay</option>
	<option value="Victorias">Victorias</option>
	<option value="Bais">Bais</option>
	<option value="Bayawan">Bayawan</option>
	<option value="Canlaon">Canlaon</option>
	<option value="Dumaguete">Dumaguete</option>
	<option value="Guihulngan">Guihulngan</option>
	<option value="Tanjay">Tanjay</option>
	<option value="Cabanatuan">Cabanatuan</option>
	<option value="Gapan">Gapan</option>
	<option value="Muñoz">Muñoz</option>
	<option value="Palayan">Palayan</option>
	<option value="San Jose">San Jose</option>
	<option value="Calapan	Oriental">Calapan	Oriental</option>
	<option value="Puerto Princesa">Puerto Princesa</option>
	<option value="Angeles">Angeles</option>
	<option value="Mabalacat ">Mabalacat </option>
	<option value="San Fernando">San Fernando</option>
	<option value="Alaminos">Alaminos</option>
	<option value="Dagupan">Dagupan</option>
	<option value="San Carlos">San Carlos</option>
	<option value="Urdaneta">Urdaneta</option>
	<option value="Lucena">Lucena</option>
	<option value="Tayabas">Tayabas</option>
	<option value="Antipolo">Antipolo</option>
	<option value="Calbayog">Calbayog</option>
	<option value="Catbalogan">Catbalogan</option>
	<option value="Sorsogon City">Sorsogon City</option>
	<option value="General Santos">General Santos</option>
	<option value="Koronadal">Koronadal</option>
	<option value="Maasin">Maasin</option>
	<option value="Tacurong">Tacurong</option>
	<option value="Surigao City">Surigao City</option>
	<option value="Bislig">Bislig</option>
	<option value="Tandag">Tandag</option>
	<option value="Tarlac City">Tarlac City</option>
	<option value="Olongapo">Olongapo</option>
	<option value="Dapitan">Dapitan</option>
	<option value="Dipolog">Dipolog</option>
	<option value="Pagadian">Pagadian</option>
	<option value="Zamboanga City">Zamboanga City</option>
</select>

        </div>

        <div class="form-group">
        <p>Building Name</p>
             <select value="<?php echo $row['building_name']; ?>" class="form-control" name="building_name">
                 <option value="Parc Royale">Parc Royale</option>
                 <option value="Crescent">Crescent</option>
                 <option value="Avante Garde">Avante Garde</option>
             </select>
        </div>
        <label>Room Number</label>
        <div class="form-group">
             <input value="<?php echo $row['room_number']; ?>" type="text" name = "room_number" class="form-control" placeholder="Room Number"/>
        </div>

        <div class="form-group">
        <p>Room Type</p>
             <select value="<?php echo $row['room_type']; ?>" class="form-control" name="room_type">
                 <option value="Parc Royale">Studio Type</option>
                 <option value="1 BedRoom">1 BedRoom</option>
                 <option value="2 BedRoom">2 BedRoom</option>
                 <option value="3 BedRoom">3 BedRoom</option>
                 <option value="4 BedRoom">4 BedRoom</option>
                 <option value="5 BedRoom">5 BedRoom</option>
                 <option value="6 BedRoom">6 BedRoom</option>
                 <option value="7 BedRoom">7 BedRoom</option>
                 <option value="8 BedRoom">8 BedRoom</option>
                 <option value="9 BedRoom">9 BedRoom</option>
             </select>
        </div>
        <label>Room Size</label>
        <div class="form-group">
             <input value="<?php echo $row['room_size']; ?>" type="number" name = "room_size" class="form-control" placeholder="Room Size SQM"/>
        </div>
        <label>Monthly Rent</label>
        <div class="form-group">
             <input value="<?php echo $row['monthly_rent']; ?>" type="number" name = "monthly_rent" class="form-control" placeholder="Monthly Rent"/>
        </div>
        <label>Commission Sharing</label>
        <div class="form-group">
             <input value="<?php echo $row['commission_rate']; ?>" type="number" name = "commission_rate" class="form-control" placeholder="Commission Rate"/>
        </div>
        <label>U+ Realty Commission</label>
        <div class="form-group">
             <input value="<?php echo $row['commission_earn']; ?>" type="number" name = "commission_earn" class="form-control" placeholder="Commission Earn"/>
        </div>
        <p>Contract Start</p>
  
        <div class="form-group">
             <input value="<?php echo $row['contract_start']; ?>" id="datepicker1" readonly name = "contract_start" class="form-control" placeholder="Contract Start"/>
        </div>

        <p>Contract End</p>
        <div class="form-group">
             <input value="<?php echo $row['contract_end']; ?>" id="datepicker2" readonly name = "contract_end" class="form-control" placeholder="Contract End"/>
        </div>

        <p>Contract Notary</p>
        <div class="form-group">
             <input value="<?php echo $row['contract_notary']; ?>" id="datepicker3" readonly name = "contract_notary" class="form-control" placeholder="Contract Notarize"/>
        </div>
        <p>Commission Collection Date</p>
        <div class="form-group">
             <input value="<?php echo $row['commission_collection']; ?>" id="datepicker4" readonly name = "commission_collection" class="form-control" placeholder="Commission Collection"/>
        </div>
        <label>Broker's Name</label>
        <div class="form-group">
             <input value="<?php echo $row['broker_name']; ?>" type="text" name = "broker_name" class="form-control" placeholder="Lessor Broker's Name"/>
        </div>
        <label>Broker's Phone Number</label>
        <div class="form-group">
             <input value="<?php echo $row['broker_phone']; ?>" type="text" name = "broker_phone" class="form-control" placeholder="Lessor Broker's Phone Number"/>
        </div>
        <label>Manager</label>
        <div class="form-group">
             <input value="<?php echo $row['manager']; ?>" type="text" name = "manager" class="form-control" placeholder="Manager"/>
        </div>



        <label>Upload Contract</label> <br>
        <input type ="file" name="contract_image[]" value="" multiple="" />
        
        
        <div class="form-group">
        <br>
             <button type="submit" name = "update_data" class="btn btn-primary btn-block" > Save Data </button>
        </div>


        </form>
      </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>