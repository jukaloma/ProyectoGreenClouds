@extends('template')


@section('title', 'Semilleros Udenar')


@section('content')
@include('Componentes.header')

<section class="semilleros">
	<div class="l-navbar" id="l-nav-bar">
		<nav class="nav">
			<div class="nav-options"> 
				<div class="nav_list"> 
					
					<a href="#content-dashboard" class="nav_link active"> 
						<i class="fa-solid fa-table"></i>
					</a>
					<a href="#content-proyectos" class="nav_link"> 
						<i class="fa-solid fa-diagram-project"></i>
					</a> 
					<a href="#content-eventos" class="nav_link"> 
						<i class="fa-solid fa-calendar-days"></i>
					</a> 
					<a href="#content-semilleristas" class="nav_link"> 
						<i class="fa-solid fa-users"></i>
					</a> 
					<a href="#content-dashboard" class="nav_link"> 
						<i class="fa-solid fa-list"></i>
					</a> 
				</div>
			</div> 
			<a href="principal" class="nav_link log-out"> 
				<i class="fa-solid fa-arrow-right-from-bracket"></i> 
			</a>
		</nav>
	</div>
    <div class="components">
        <div class="content">
			<div id="content-dashboard" class="content-item">
				<div class="content-item-title">
					<h4>{{ $id }}</h4>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 shadow">
						<div class="card">
							<div class="card-header">
								Proyectos
							</div>
							<div class="card-body">
								<div class="widget-null">
									<img src="{{ asset('images/crea-proy.png')}}" alt="">
									<p>Este semillero aún no tiene Proyectos. </p> <br>
									<!-- <a href="#content-proyectos" class="nav_link"><i class="fa-solid fa-folder-plus"></i></a> -->
									<button class="btn btn-success">Crear proyecto</button>
								</div>
									<!-- <ul>
										<li>Proyecto 1</li>
									</ul> -->
							</div>
						</div>
					</div>

					<div class="col-md-6 mb-3">
						<div class="card">
							<div class="card-header">
								Eventos
							</div>
							<div class="card-body">
								<div class="widget-null">
									<img src="{{ asset('images/crea-event.png')}}" alt="">
									<p>Este semillero aún no tiene Eventos. </p> <br>
									<button class="btn btn-success">Crear evento</button>
								</div>
									<!-- <ul>
										<li>Proyecto 1</li>
									</ul> -->
							</div>
						</div>
					</div>

					<div class="col-md-6 mb-3">
						<div class="card">
							<div class="card-header">
								Semilleristas
							</div>
							<div class="card-body">
								<div class="widget-null">
									<img src="{{ asset('images/user-null.png')}}" alt="">
									<p>Aún no hay semilleristas vinculados a este semillero. </p> <br>
								</div>
									<!-- <ul>
										<li>Proyecto 1</li>
									</ul> -->
							</div>
						</div>
					</div>
					
					<div class="col-md-6 mb-3">
						<div class="card">
							<div class="card-header">
								Reportes
							</div>
							<div class="card-body">
								<a href="" class="btn btn-primary">Opción 1</a>
								<a href="" class="btn btn-primary">Opción 2</a>
								<a href="" class="btn btn-primary">Opción 3</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="content-proyectos" class="content-item hidden">
				<div class="content-item-title">
					<h4>{{ $id }}</h4>
				</div>
				<div class="card card-item mx-2 mb-3">
					<a href="tecnopazifico" class="img-container">
						<img src="{{ asset('images/tecnopazifico.jpg')}}" class="card-img-top" alt="logo tecnopazifico">
						<div class="overlay">
							<span>Ver mas</span>
						</div>
					</a>
					<hr>
					<div class="card-body">
						<div class="op-semilleros">
							<a href="#" class="op-link mx-4">
								<i class="fa-solid fa-pen-to-square" data-target="modal_act_semillero" onclick="openModal('modal_act_semillero')" data-parametro=""></i>
							</a>
							<a href="#" class="op-link mx-4"><i class="fa-solid fa-trash-can"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div id="content-eventos" class="content-item hidden">
				<div class="content-item-title">
					<h4>{{ $id }}</h4>
				</div>
			</div>
			<div id="content-semilleristas" class="content-item hidden">
				<div class="content-item-title">
					<h4>{{ $id }}</h4>
				</div>
			</div>
        </div>
    </div>

</section>	
@endsection