@extends('layouts.master')

@section('title', 'Frequently Asked Questions')

@section('content')
@livewire('nav-bar')
<v-sheet>
    <v-img src="/images/faq.jpg" height="300">
         <v-card-title class="mt-12" style="opacity: 0.6; background: #000">
            <h2 class="text-center display-sm-2 mx-auto d-none d-sm-flex" style="color: white">
                FREQUENTLY ASKED QUESTIONS
            </h2>

            <h4 class="text-center d-flex d-sm-none  display-sm-2 mx-auto" style="color: white">
                FREQUENTLY ASKED QUESTIONS
            </h4>
        </v-card-title>
    </v-img>
</v-sheet>
       
        <v-container>
            <our-team inline-template>
                <v-expansion-panels flat v-model="panel" mandatory>
                  
                    @foreach($faqs as $faq)
    
                    <v-expansion-panel >
                        <v-expansion-panel-header color="#b17c2e" style="color: #fff">
                            <span class="font-weight-bold title">{{ $faq->question }}</span>
                            
                              <template v-slot:actions>
                            <v-icon color="#fff">
                                mdi-chevron-down
                            </v-icon>
                        </template>
                        </v-expansion-panel-header>
    
                        <v-expansion-panel-content>
                           <span class="font-weight-bold">{{ $faq->answer }}</span> 
                        </v-expansion-panel-content>
                    </v-expansion-panel>
                  
                    @endforeach
                </v-expansion-panels>
            </our-team>
        </v-container>

@endsection
