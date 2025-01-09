@extends('menu')

@section('title', 'Painel')
    
@section('content')

<div class="flex-1 p-6 ">
  <div class="bg-white shadow-md p-6 rounded-lg">
    <h1 class="text-3xl font-bold mb-4">Welcome to the Dashboard</h1>
    <p class="text-gray-600">
      This is a responsive dashboard example using DaisyUI with a sidebar and top bar.
    </p>
  </div>

  <!-- Content Grid -->
  

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
      <div class="card shadow-md bg-primary text-primary-content">
          <div class="card-body">
          <i class="ti ti-ad-circle text-5xl hover:text-lg"></i>
          <i class="ti ti-align-box-top-left"></i>

          </div>
      </div>
      <div class="card shadow-md bg-secondary text-secondary-content">
          <div class="card-body">
          <h2 class="card-title">Card 2</h2>
          <p>Details about this card.</p>
          </div>
      </div>
      <div class="card shadow-md bg-accent text-accent-content">
          <div class="card-body">
          <h2 class="card-title">Card 3</h2>
          <p>Details about this card.</p>
          </div>
      </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
    <div class="card shadow-md bg-primary text-primary-content">
        <div class="card-body">
        <i class="ti ti-ad-circle text-5xl hover:text-lg"></i>
        <i class="ti ti-align-box-top-left"></i>

        </div>
    </div>
    <div class="card shadow-md bg-secondary text-secondary-content">
        <div class="card-body">
        <h2 class="card-title">Card 2</h2>
        <p>Details about this card.</p>
        </div>
    </div>
    <div class="card shadow-md bg-accent text-accent-content">
        <div class="card-body">
        <h2 class="card-title">Card 3</h2>
        <p>Details about this card.</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
  <div class="card shadow-md bg-primary text-primary-content">
      <div class="card-body">
      <i class="ti ti-ad-circle text-5xl hover:text-lg"></i>
      <i class="ti ti-align-box-top-left"></i>

      </div>
  </div>
  <div class="card shadow-md bg-secondary text-secondary-content">
      <div class="card-body">
      <h2 class="card-title">Card 2</h2>
      <p>Details about this card.</p>
      </div>
  </div>
  <div class="card shadow-md bg-accent text-accent-content">
      <div class="card-body">
      <h2 class="card-title">Card 3</h2>
      <p>Details about this card.</p>
      </div>
  </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
  <div class="card shadow-md bg-primary text-primary-content">
      <div class="card-body">
      <i class="ti ti-ad-circle text-5xl hover:text-lg"></i>
      <i class="ti ti-align-box-top-left"></i>

      </div>
  </div>
  <div class="card shadow-md bg-secondary text-secondary-content">
      <div class="card-body">
      <h2 class="card-title">Card 2</h2>
      <p>Details about this card.</p>
      </div>
  </div>
  <div class="card shadow-md bg-accent text-accent-content">
      <div class="card-body">
      <h2 class="card-title">Card 3</h2>
      <p>Details about this card.</p>
      </div>
  </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
  <div class="card shadow-md bg-primary text-primary-content">
      <div class="card-body">
      <i class="ti ti-ad-circle text-5xl hover:text-lg"></i>
      <i class="ti ti-align-box-top-left"></i>

      </div>
  </div>
  <div class="card shadow-md bg-secondary text-secondary-content">
      <div class="card-body">
      <h2 class="card-title">Card 2</h2>
      <p>Details about this card.</p>
      </div>
  </div>
  <div class="card shadow-md bg-accent text-accent-content">
      <div class="card-body">
      <h2 class="card-title">Card 3</h2>
      <p>Details about this card.</p>
      </div>
  </div>
</div>
</div>


    
@endsection

