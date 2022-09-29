<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import NodeShow from '../Components/NodeShow.vue';
    // console.log($practicas);
    
    
    </script>
        
        <template>
            <AppLayout title="Base de Datos">
                <template #header>
                    <h2 class="font-semibold text-xl text-orange-600 leading-tight">
                        Base de Datos
                    </h2>
                </template>
        
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-1">
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                           <h1 class="text-4xl text-center mt-3 mb-8 text-blue-800 ">Formato Tabla</h1> 
                        
                        <table class="table-auto w-full">
                            <thead>
                        <tr>
                            <th class="p-3">Practica</th>
                            <th class="p-3">Sub Titulo</th>
                            <th class="p-3">Parrafo</th>
                            <th class="p-3">Enlace</th>
                            <th class="p-3">Skills</th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for="i in practicas">
                                <td class="p-3 border">{{i.titulo}}</td>
                                <td class="p-3 border">{{i.subtitulo}}</td>
                                <td class="p-3 border">{{i.parrafo}}</td>
                                <td class="p-3 border">{{i.enlace}}</td>
                                <td class="p-3 border">{{i.skills}}</td>
                                

                            </tr>
                        </tbody>
                        </table>



                            <NodeShow />
                        </div>
                        </div>
                    </div>
                </div>
            </AppLayout>
        </template>
        
    <script>
    
    export default {
        props: ['practicas'],
        components: {
        AppLayout
    },
    
    }
        </script>