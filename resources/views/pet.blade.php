@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Pet {{$pet->nome}}</title>
	
	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/pet.css"/>
	
	<!-- JavaScript da Página -->
	<script src="js/pet.js"/>
</head>
	
<body onload="showDivs(1)">
	Imagens de {{$pet->nome}}
	<div id="mySlide">
		<div id="slideshow" class="w3-display-container flex-wrap">
			<graphicImage styleClass="mySlides" value ="/images/#{petBean.pet.fotos[0].idImagem}" alt="Ocorreu um erro ao carregar a imagem."/>
			<graphicImage styleClass="mySlides" value ="/images/#{petBean.pet.fotos[1].idImagem}" alt="Ocorreu um erro ao carregar a imagem."/>
			<graphicImage styleClass="mySlides" value ="/images/#{petBean.pet.fotos[2].idImagem}" alt="Ocorreu um erro ao carregar a imagem."/>
			<graphicImage styleClass="mySlides" value ="/images/#{petBean.pet.fotos[3].idImagem}" alt="Ocorreu um erro ao carregar a imagem."/>

			<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
		</div>
	</div>
	
	<div class="w3-container">
	<br/><hr/>
		<h4><strong>Descrição</strong></h4>
		<div class="w3-row w3-large">
			<div class="w3-col s4">
				<p><i class="fa fa-fw fa-dna"></i> Espécie: <outputText value="#{petBean.pet.especie}"/></p>
				<p><i class="fa fa-fw fa-paw"></i> Raça: <outputText value="#{petBean.pet.raca}"/></p>
				<p><i class="fa fa-fw fa-clock"></i> Idade: <outputText value="#{petBean.pet.getIdade()}"/></p>
			</div>
			<div class="w3-col s4">
				<p><i class="fa fa-fw fa-home"></i> Cidade: <outputText value="#{petBean.pet.dono.cidade.nome}"/></p>
				<p><i class="fa fa-fw fa-paperclip"></i> Observações: <outputText value="#{petBean.pet.observacao}"/></p>
			</div>
			<div class="w3-col s4">
				<p><i class="fa fa-fw fa-hand-holding-heart"></i> Interessado em me adotar? Contate meu dono!</p>
				<p><i class="fa fa-fw fa-mobile-alt"></i> <outputText value="#{petBean.pet.dono.telefone}"/></p>
			</div>
		</div>
	</div>
</body>
@stop