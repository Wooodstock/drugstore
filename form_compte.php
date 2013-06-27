<div id="content">
<form name="form_add" id="form_add" method="post" action="scripts/traitements.php">
    <input type="hidden" name="id_form" value="2">
                <h1>Inscription</h1><br/>
  <h3>Informations Client : </h3>
                                                  <table border="0" cellpadding="4" cellspacing="0" style="width:100%;">
                            <tbody><tr>
                              <td width="20">&nbsp;</td>
                              <td class="asterisque">* champ obligatoire</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Civilité <span class="asterisque">*</span></td>
                              <td>                                  <select name="id_civilite" id="id_civilite">
                                                                        <option value="1">Madame</option>
                                                                        <option value="2">Mademoiselle</option>
                                                                        <option value="3">Monsieur</option>
                                                                    </select></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Nom<span class="asterisque">*</span></td>
                              <td><input name="nom" type="text" id="nom" value="" size="30" maxlength="100"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Prénom<span class="asterisque">*</span></td>
                              <td><input name="prenom" type="text" id="prenom" value="" size="30" maxlength="100"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Adresse<span class="asterisque">*</span></td>
                              <td><input name="adresse" type="text" id="adresse" value="" size="50" maxlength="100"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Adresse</td>
                              <td><input name="adresse2" type="text" id="adresse2" value="" size="50" maxlength="100"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Code postal<span class="asterisque">*</span> </td>
                              <td><input name="cp" type="text" id="cp" value="" size="10" maxlength="10"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Ville<span class="asterisque">*</span></td>
                              <td><input name="ville" type="text" id="ville" value="" size="30" maxlength="100"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Pays<span class="asterisque">*</span></td>
                              <td>                                  <select name="id_pays" id="id_pays">
                                                                        <option value="65" selected="">France</option>
                                                                        <option value="1">Afghanistan</option>
                                                                        <option value="2">Afrique du Sud</option>
                                                                        <option value="3">Albanie</option>
                                                                        <option value="4">Algérie</option>
                                                                        <option value="5">Allemagne</option>
                                                                        <option value="6">Andorre</option>
                                                                        <option value="7">Angola</option>
                                                                        <option value="8">Antigua-et-Barbuda</option>
                                                                        <option value="9">Arabie saoudite</option>
                                                                        <option value="10">Argentine</option>
                                                                        <option value="11">Arménie</option>
                                                                        <option value="12">Australie</option>
                                                                        <option value="13">Autriche</option>
                                                                        <option value="14">Azerbaïdjan</option>
                                                                        <option value="15">Bahamas</option>
                                                                        <option value="16">Bahreïn</option>
                                                                        <option value="17">Bangladesh</option>
                                                                        <option value="18">Barbade</option>
                                                                        <option value="19">Belau</option>
                                                                        <option value="20">Belgique</option>
                                                                        <option value="21">Belize</option>
                                                                        <option value="22">Bénin</option>
                                                                        <option value="23">Bhoutan</option>
                                                                        <option value="24">Biélorussie</option>
                                                                        <option value="25">Birmanie</option>
                                                                        <option value="26">Bolivie</option>
                                                                        <option value="27">Bosnie-Herzégovine</option>
                                                                        <option value="28">Botswana</option>
                                                                        <option value="29">Brésil</option>
                                                                        <option value="30">Brunei</option>
                                                                        <option value="31">Bulgarie</option>
                                                                        <option value="32">Burkina</option>
                                                                        <option value="33">Burundi</option>
                                                                        <option value="34">Cambodge</option>
                                                                        <option value="35">Cameroun</option>
                                                                        <option value="36">Canada</option>
                                                                        <option value="37">Cap-Vert</option>
                                                                        <option value="38">Chili</option>
                                                                        <option value="39">Chine</option>
                                                                        <option value="40">Chypre</option>
                                                                        <option value="41">Colombie</option>
                                                                        <option value="42">Comores</option>
                                                                        <option value="43">Congo</option>
                                                                        <option value="44">Congo (la Rép. dém. du)</option>
                                                                        <option value="45">Cook</option>
                                                                        <option value="46">Corée du Nord</option>
                                                                        <option value="47">Corée du Sud</option>
                                                                        <option value="48">Costa Rica</option>
                                                                        <option value="49">Côte d'Ivoire</option>
                                                                        <option value="50">Croatie</option>
                                                                        <option value="51">Cuba</option>
                                                                        <option value="52">Danemark</option>
                                                                        <option value="53">Djibouti</option>
                                                                        <option value="54">Dominique</option>
                                                                        <option value="55">Égypte</option>
                                                                        <option value="56">Émirats arabes unis</option>
                                                                        <option value="57">Équateur</option>
                                                                        <option value="58">Érythrée</option>
                                                                        <option value="59">Espagne</option>
                                                                        <option value="60">Estonie</option>
                                                                        <option value="61">Etats-Unis</option>
                                                                        <option value="62">Éthiopie</option>
                                                                        <option value="63">Fidji</option>
                                                                        <option value="64">Finlande</option>
                                                                        <option value="66">Gabon</option>
                                                                        <option value="67">Gambie</option>
                                                                        <option value="68">Géorgie</option>
                                                                        <option value="69">Ghana</option>
                                                                        <option value="70">Grèce</option>
                                                                        <option value="71">Grenade</option>
                                                                        <option value="72">Guatemala</option>
                                                                        <option value="73">Guinée</option>
                                                                        <option value="75">Guinée équatoriale</option>
                                                                        <option value="74">Guinée-Bissao</option>
                                                                        <option value="76">Guyana</option>
                                                                        <option value="77">Haïti</option>
                                                                        <option value="78">Honduras</option>
                                                                        <option value="79">Hongrie</option>
                                                                        <option value="80">Inde</option>
                                                                        <option value="81">Indonésie</option>
                                                                        <option value="82">Iran</option>
                                                                        <option value="83">Iraq</option>
                                                                        <option value="84">Irlande</option>
                                                                        <option value="85">Islande</option>
                                                                        <option value="86">Israël</option>
                                                                        <option value="87">Italie</option>
                                                                        <option value="88">Jamaïque</option>
                                                                        <option value="89">Japon</option>
                                                                        <option value="90">Jordanie</option>
                                                                        <option value="91">Kazakhstan</option>
                                                                        <option value="92">Kenya</option>
                                                                        <option value="93">Kirghizistan</option>
                                                                        <option value="94">Kiribati</option>
                                                                        <option value="95">Koweït</option>
                                                                        <option value="96">Laos</option>
                                                                        <option value="97">Lesotho</option>
                                                                        <option value="98">Lettonie</option>
                                                                        <option value="99">Liban</option>
                                                                        <option value="100">Liberia</option>
                                                                        <option value="101">Libye</option>
                                                                        <option value="102">Liechtenstein</option>
                                                                        <option value="103">Lituanie</option>
                                                                        <option value="104">Luxembourg</option>
                                                                        <option value="105">Macédoine</option>
                                                                        <option value="106">Madagascar</option>
                                                                        <option value="107">Malaisie</option>
                                                                        <option value="108">Malawi</option>
                                                                        <option value="109">Maldives</option>
                                                                        <option value="110">Mali</option>
                                                                        <option value="111">Malte</option>
                                                                        <option value="112">Maroc</option>
                                                                        <option value="113">Marshall</option>
                                                                        <option value="114">Maurice</option>
                                                                        <option value="115">Mauritanie</option>
                                                                        <option value="116">Mexique</option>
                                                                        <option value="117">Micronésie</option>
                                                                        <option value="118">Moldavie</option>
                                                                        <option value="119">Monaco</option>
                                                                        <option value="120">Mongolie</option>
                                                                        <option value="121">Mozambique</option>
                                                                        <option value="122">Namibie</option>
                                                                        <option value="123">Nauru</option>
                                                                        <option value="124">Népal</option>
                                                                        <option value="125">Nicaragua</option>
                                                                        <option value="126">Niger</option>
                                                                        <option value="127">Nigeria</option>
                                                                        <option value="128">Niue</option>
                                                                        <option value="129">Norvège</option>
                                                                        <option value="130">Nouvelle-Zélande</option>
                                                                        <option value="131">Oman</option>
                                                                        <option value="132">Ouganda</option>
                                                                        <option value="133">Ouzbékistan</option>
                                                                        <option value="134">Pakistan</option>
                                                                        <option value="135">Panama</option>
                                                                        <option value="136">Papouasie - Nouvelle Guinée</option>
                                                                        <option value="137">Paraguay</option>
                                                                        <option value="138">Pays-Bas</option>
                                                                        <option value="139">Pérou</option>
                                                                        <option value="140">Philippines</option>
                                                                        <option value="141">Pologne</option>
                                                                        <option value="142">Portugal</option>
                                                                        <option value="143">Qatar</option>
                                                                        <option value="144">République centrafricaine</option>
                                                                        <option value="145">République dominicaine</option>
                                                                        <option value="146">République tchèque</option>
                                                                        <option value="147">Roumanie</option>
                                                                        <option value="148">Royaume-Uni</option>
                                                                        <option value="149">Russie</option>
                                                                        <option value="150">Rwanda</option>
                                                                        <option value="151">Saint-Christophe-et-Niévès</option>
                                                                        <option value="153">Saint-Marin</option>
                                                                        <option value="154">Saint-Siège (le), ou leVatican</option>
                                                                        <option value="155">Saint-Vincent-et-les Grenadines</option>
                                                                        <option value="152">Sainte-Lucie</option>
                                                                        <option value="156">Salomon</option>
                                                                        <option value="157">Salvador</option>
                                                                        <option value="158">Samoa occidentales</option>
                                                                        <option value="159">Sao Tomé-et-Principe</option>
                                                                        <option value="160">Sénégal</option>
                                                                        <option value="201">Serbie</option>
                                                                        <option value="161">Seychelles</option>
                                                                        <option value="162">Sierra Leone</option>
                                                                        <option value="163">Singapour</option>
                                                                        <option value="164">Slovaquie</option>
                                                                        <option value="165">Slovénie</option>
                                                                        <option value="166">Somalie</option>
                                                                        <option value="167">Soudan</option>
                                                                        <option value="168">Sri Lanka</option>
                                                                        <option value="169">Suède</option>
                                                                        <option value="170">Suisse</option>
                                                                        <option value="171">Suriname</option>
                                                                        <option value="172">Swaziland</option>
                                                                        <option value="173">Syrie</option>
                                                                        <option value="174">Tadjikistan</option>
                                                                        <option value="175">Tanzanie</option>
                                                                        <option value="176">Tchad</option>
                                                                        <option value="177">Thaïlande</option>
                                                                        <option value="178">Togo</option>
                                                                        <option value="179">Tonga</option>
                                                                        <option value="180">Trinité-et-Tobago</option>
                                                                        <option value="181">Tunisie</option>
                                                                        <option value="182">Turkménistan</option>
                                                                        <option value="183">Turquie</option>
                                                                        <option value="184">Tuvalu</option>
                                                                        <option value="185">Ukraine</option>
                                                                        <option value="186">Uruguay</option>
                                                                        <option value="187">Vanuatu</option>
                                                                        <option value="188">Venezuela</option>
                                                                        <option value="189">Viêt Nam</option>
                                                                        <option value="190">Yémen</option>
                                                                        <option value="191">Yougoslavie</option>
                                                                        <option value="192">Zaïre voir Congo</option>
                                                                        <option value="193">Zambie</option>
                                                                        <option value="194">Zimbabwe</option>
                                                                    </select></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Cotisation mutuelle <span class="asterisque">*</span></td>
                              <td>                                  <select name="id_cotisation" id="id_cotisation">
                                                                        <option value="100">100</option>
                                                                        <option value="150">150</option>
                                                                        <option value="200">200</option>
                                                                        <option value="300">300</option>
                                                                        <option value="400">400</option>
                                                                    </select></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Téléphone<span class="asterisque">*</span></td>
                              <td><input name="tel" type="text" id="tel" value="" size="15" maxlength="30"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Mobile</td>
                              <td><input name="mobile" type="text" id="mobile" value="" size="15" maxlength="30"></td>
                            </tr>
                            <tr>
                              <td colspan="3"><h3>&nbsp;</h3>
                              <h3>Information de connexion</h3></td>
                              </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Email (identifiant)<span class="asterisque">*</span> </td>
                              <td><input name="email" type="text" id="email" value="" size="30" maxlength="50"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Mot de passe<span class="asterisque">*</span> </td>
                              <td><input name="pwd1" type="password" id="pwd1" value="" size="20" maxlength="20"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>Confirmez le mot de passe<span class="asterisque">*</span> </td>
                              <td><input name="pwd2" type="password" id="pwd2" value="" size="20" maxlength="20"></td>
                            </tr>
                            <tr>
                              <td colspan="3"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input name="id_client" type="hidden" id="id_client" value="">
                                  <input name="date_crea" type="hidden" id="date_crea" value=""></td>
                              <td><input name="gestion_compte_add_form" type="submit" id="gestion_compte_add_form" value="Soumettre ma demande" class="button medium white"></td>
                            </tr>
    </tbody>
    </table>
</form>
</div>