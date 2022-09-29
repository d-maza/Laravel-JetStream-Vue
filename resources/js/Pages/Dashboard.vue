<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-cyan-800 leading-tight">
                Presentación
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div> 
        </div>
       
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 sm:px-24 bg-green-100 border-b border-gray-200">
                    <div class="text-center text-xl">
                        <div class="lg:max-w-7xl px-24">
                            <iframe width="660" height="415" src="https://www.youtube.com/embed/videoseries?list=PLB5SYDBi8M3FBx5Ff-1fGug4iHMDiq5uo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div> 
                    </div>
                </div>
            </div> 
              
    </AppLayout>  
</template>

