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
                       <h1 class="text-4xl text-center mt-3  text-blue-800">Formato Json</h1> 
                    <pre>{{practicas}}</pre>
                        <NodeShow />
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