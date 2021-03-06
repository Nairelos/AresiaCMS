@extends('master')

@section('title', 'Armurerie')

<link rel="stylesheet" href="{{ asset('style/css/libs.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/dark-pumpkin.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/ankama.css') }}">
@section('style')

@section('content')
<div class="panel_title">
    <div>
		<h4>Amurerie</h4>
	</div>
</div>
	<!-- saved from url=(0061)https://www.dofusbook.net/fr/equipement/173031-stuff-1/objets -->
								<div class="widget">
									<div class="tb_widget_search">
										<form>
											<input type="text" placeholder="Taper le nom d'un personnage">
											<input type="submit" value="rechercher">
										</form>
									</div>
								</div>
								<div class="CmpWidget">
									<div class="CmpWidget-content">
										<div class="row">
											<div class="col-sm-13">
												<div class="CmpItems">
													<div class="CmpItems-column">
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/1234.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/82063.png') }}" class="CmpItems-img"></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/9272.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/10311.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/11276.png') }}" class=""></div>
													</div> 
													<div class="CmpItems-column CmpItems-column--main hidden-xs">
														<div class="u-position-relative u-block-center">
															<div id="flashAvatar">
															<img src="{{ asset('style/img/persos/race/characters/2-0.png') }}" height="325" width="325">
																<!--<object type="application/x-shockwave-flash" id="flash" data="./style/swf/DofusPersos.swf" width="350" height="350">
																	<param name="allowscriptaccess" value="sameDomain"> 
																	<param name="flashvars" value="look={1|20,2028,3348,3139|1=#f3bc5e,2=#ffffce,3=#49ccdd,4=#2b2313,5=#ffc430|130}&amp;render=direct&amp;export=true&amp;orientation=3"> 
																	<param name="wmode" value="transparent"> 
																	<param name="enablejs" value="true"> 
																	<p><img src="./style/img/characters/2-0.png" height="325" width="325"></p>
																</object>-->
															</div> 
															<form id="customizeCharacter"></form>
														</div>
													</div> 
													<div class="CmpItems-column">
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/16439.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/5087.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/9283.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/17362.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/121013.png') }}" class=""></div>
													</div>
												</div>
												<div class="CmpItems-column">
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/151183.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/151225.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/23005.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/151254.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/23018.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/23003.png') }}" class=""></div>
												</div>
											</div> 
											<div class="col-sm-7">
												<div class="u-clear-min"></div> 
												<div class="CmpStat"><span class="CmpStat-number">5065</span><span class="sprite-caracs  carac-pv"></span><span class="CmpStat-label">Vie (PV)</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">11</span><span class="sprite-caracs carac-pa"></span><span class="CmpStat-label">Action (PA)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">6</span><span class="sprite-caracs carac-pm"></span><span class="CmpStat-label">Mouvement (PM)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">4</span> <span class="sprite-caracs carac-po"></span> <span class="CmpStat-label">Port??e (PO)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">223</span> <span class="sprite-caracs carac-pp"></span> <span class="CmpStat-label">Prospection (PP)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">3190</span> <span class="sprite-caracs carac-ii"></span> <span class="CmpStat-label">Initiative</span></div>
												<div class="CmpStat"><span class="CmpStat-number">31</span> <span class="sprite-caracs carac-cc"></span> <span class="CmpStat-label">Critique</span></div>
												<div class="CmpStat"><span class="CmpStat-number">4</span> <span class="sprite-caracs carac-ic"></span> <span class="CmpStat-label">Invocation</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">12</span> <span class="sprite-caracs carac-so"></span> <span class="CmpStat-label">Soin</span> </div> 
												<hr class="CmpStat-hr"> 
												<div class="CmpStat"><span class="CmpStat-number">4015</span> <span class="sprite-caracs carac-vi"></span> <span class="CmpStat-label">Vitalit??</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">320</span> <span class="sprite-caracs carac-sa"></span> <span class="CmpStat-label">Sagesse</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">690</span> <span class="sprite-caracs carac-fo"></span> <span class="CmpStat-label">Force</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">680</span> <span class="sprite-caracs carac-in"></span> <span class="CmpStat-label">Intelligence</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">230</span> <span class="sprite-caracs carac-ch"></span> <span class="CmpStat-label">Chance</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">690</span> <span class="sprite-caracs carac-ag"></span> <span class="CmpStat-label">Agilit??</span> </div>
												<hr class="CmpStat-hr">
												<div class="CmpStat"><span class="CmpStat-number">8%</span> <span class="sprite-caracs carac-rn"></span> <span class="CmpStat-label">R??sistance Neutre</span></div>
												<div class="CmpStat"><span class="CmpStat-number">20%</span> <span class="sprite-caracs carac-rt"></span> <span class="CmpStat-label">R??sistance Terre</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">19%</span> <span class="sprite-caracs carac-rf"></span> <span class="CmpStat-label">R??sistance Feu</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">38%</span> <span class="sprite-caracs carac-re"></span> <span class="CmpStat-label">R??sistance Eau</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">20%</span> <span class="sprite-caracs carac-ra"></span> <span class="CmpStat-label">R??sistance Air</span> </div>																	
											</div>
										</div>
									</div>
								</div>
								<div class="woocommerce-tabs">
                                <div class="tab_content">
                                    <ul class="clearfix">
                                        <li><h4><a href="#tabs_1">Description</a></h4></li>
                                        <li><h4><a href="#tabs_2">Carat??ristique</a></h4></li>
										<li><h4><a href="#tabs_3">Recette</a></h4></li>
										<li><h4><a href="#tabs_4">Panoplie</a></h4></li>
                                    </ul>
                                    <div id="tabs_1">
                                        <p>Finalement, le secteur de la bijouterie n'a pas tellement ??volu?? ces cent derni??res ann??es.</p>
                                    </div>
                                    <div id="tabs_2">
										<table class="ak-list-carac">
											<tbody>
												<tr>
													<td class="carac carac_vit"><span></span>200 ?? 300 Vitalit??</td>
												</tr>
												<tr>
													<td class="carac carac_sag"><span></span>35 ?? 50 Sagesse</td>
												</tr>
												<tr>
													<td class="carac carac_int"><span></span>75 ?? 100 Intelligence</td>
												</tr>
												<tr>
													<td class="carac carac_for"><span></span>75 ?? 100 Force</td>
												</tr>
												<tr>
													<td class="carac carac_dom"><span></span>5 ?? 10 Dommage</td>
												</tr>
												<tr>
													<td class="carac carac_pp"><span></span>20 ?? 30 Prospection</td>
												</tr>
												<tr>
													<td class="carac carac_neu"><span></span>5 ?? 8 % Resistance Neutre</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div id="tabs_3">
										<div class="alert_message grey" jquery="">
											<p><b>M??tier</b> : Tailleur</p>
										</div>
                                        <table>
											<tbody>
												<tr>
													<th>Nombre</th>
													<th>Image</th>
													<th>Ressource</th>
													<th>Cat??gorie</th>
													<th>Niveau</th>
												</tr>
												<tr>
													<td>8</td>
													<td><img width="60" height="60" src="{{ asset('style/img/items/53362.png') }}"></td>
													<td>Plume du Ma??tre Corbac</td>
													<td>Plume</td>
													<td>110</td>
												 </tr>
												<tr>
													<td>19</td>
													<td><img width="60" height="60" src="{{ asset('style/img/items/55005.png') }}"></td>
													<td>??toffe de Fant??me Pandule</td>
													<td>Etoffe</td>
													<td>100</td>
												 </tr>
												 <tr>
													<td>8</td>
													<td><img width="60" height="60" src="{{ asset('style/img/items/53362.png') }}"></td>
													<td>Plume du Ma??tre Corbac</td>
													<td>Plume</td>
													<td>110</td>
												 </tr>
											</tbody>
										</table>
									</div>
									<div id="tabs_4">
										<div class="alert_message grey" jquery="">
											<p><b>Panoplie</b> : S??culaire</p>
										</div>
										<table>
											<tbody>
												<tr>
													<th>Image</th>
													<th>Nom</th>
													<th>Cat??gorie</th>
													<th>Niveau</th>
												</tr>
												<tr>
													<td><img width="60" height="60" src="{{ asset('style/img/items/16363.png') }}"></td>
													<td>Coiffre S??culaire</td>
													<td>Chapeau</td>
													<td>200</td>
												 </tr>
												<tr>
													<td><img width="60" height="60" src="{{ asset('style/img/items/1230.png') }}"></td>
													<td>Amulette S??culaire</td>
													<td>Amulette</td>
													<td>200</td>
												 </tr>
												 <tr>
													<td><img width="60" height="60" src="{{ asset('style/img/items/10243') }}.png"></td>
													<td>Ceinture S??culaire</td>
													<td>Ceinture</td>
													<td>200</td>
												 </tr>
											</tbody>
										</table>
									</div>
                                </div>
                            </div>
@endsection