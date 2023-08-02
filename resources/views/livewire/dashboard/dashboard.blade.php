<div class='row justify-content-center'>   
   <div class="col-lg-11" >
      @if($window == 'index')
         <livewire:callings.setor-list-callings department='{{auth()->user()->department_id}}'>
      @elseif($window=='show')
         <livewire:callings.details id='{{$selectedID}}'>      
      @endif
      <livewire:callings.delete>
      <livewire:callings.close>
      <!-- Grafico
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Donut Chart</div>
                  </div>
                  <div class="card-body">
                     <div class="chartjs-wrapper-demo">
                        <div id="chart4" class="h-300 mh-300 mh-300 mh-300"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      -->
      </div>
      
   </div>
   
</div>
