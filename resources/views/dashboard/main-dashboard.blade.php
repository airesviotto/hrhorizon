<x-layouts.layout-app title="Dashboard">
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <main class="p-4 md:ml-64 h-auto pt-20">

          {{--INFO BOXES--}}
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">  
              <x-dashboard.info-box 
                title="Revenue Status" 
                value="$432" 
                date="Feb 01 - Mar 10"
                :icon="'
                    <svg xmlns=\'http://www.w3.org/2000/svg\' class=\'w-8 h-8\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\' stroke-width=\'2\'>
                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\'d=\'M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z\'/>
                    </svg>
                   
                '"
            />

            <x-dashboard.info-box 
                title="Expenses" 
                value="$-120" 
                date="Feb 01 - Mar 10"
                :icon="'
                    <svg xmlns=\'http://www.w3.org/2000/svg\' class=\'w-8 h-8\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\' stroke-width=\'2\'>
                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M20 12H4\' />
                    </svg>
                '"
            />

            <x-dashboard.info-box 
                title="Balance" 
                value="$0" 
                date="Feb 01 - Mar 10"
                :icon="'
                    <svg xmlns=\'http://www.w3.org/2000/svg\' class=\'w-8 h-8\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\' stroke-width=\'2\'>
                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M12 4v16m8-8H4\' />
                    </svg>
                '"
            />

              <x-dashboard.info-box 
                  title="Revenue Status" 
                  value="0" 
                  date="Feb 01 - Mar 10"
                  background="bg-gradient-to-r from-red-400 via-red-60 to-red-800"
                  :icon="'
                      <svg xmlns=\'http://www.w3.org/2000/svg\' class=\'w-8 h-8\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\' stroke-width=\'2\'>
                          <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M4 21V9m4 12V3m4 18v-6m4 6V11m4 10V7\' />
                      </svg>
                  '"
              />
      </div>
      {{--INFO BOXES END--}}

      {{--CHARTS--}}
      <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="col-span-2 rounded-lg border-gray-300 dark:border-gray-600 h-100 md:h-100">
         
          <x-dashboard.chart
              id="salesChart"
              type="line"
              :labels="$labels"
              :datasets="$datasets"
          ></x-dashboard.chart>
        
        </div>
        <div class="col-span-1 rounded-lg border-gray-300 dark:border-gray-600 md:h-100">
             <x-dashboard.chart
                id="colaboratorChart"
                type="pie"
                :labels="$label"
                :datasets="$pieData"
            ></x-dashboard.chart>
        </div>
      </div>
      <div
        class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
      ></div>
      <div class="grid grid-cols-2 gap-4">
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
      </div>
     </main>
    </div>     
</x-layouts.layout-app>


