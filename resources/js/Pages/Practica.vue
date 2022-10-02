<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";



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
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-1"
                >
                    <h1 class="text-4xl text-center mt-3 text-blue-800">
                        Añadir Practica
                    </h1>
                    <h2 style="margin-top: 2cm; color: brown ; font-family:monospace; ">{{msg}}</h2>
                    <form action="/Practica" method="POST">
                        
                        
                    <div class="bg-white sm:p-4">
                        <label
                            for=""
                            class="block text-sm font-medium text-gray-700"
                            >Título</label
                        >
                        <div class=" flex rounded-md shadow-sm">
                            <input
                                type="text"
                                name="titulo"
                                id="titulo"
                                class="block w-full flex-1 rounded rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-200 sm:text-sm"
                                placeholder="Título"
                            />
                        </div>
                    </div>
                    <div class="bg-white sm:p-4">
                        <label
                            for="subtitulo"
                            class="block text-sm font-medium text-gray-700"
                            >Subtítulo</label
                        >
                        <div class=" flex rounded-md shadow-sm">
                            <input
                                type="text"
                                name="subtitulo"
                                id="subtitulo"
                                class="block w-full flex-1 rounded rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-200 sm:text-sm"
                                placeholder="Subtítulo"
                            />
                        </div>
                    </div>
                    <div class="bg-white sm:p-4">
                        <label
                            for=""
                            class="block text-sm font-medium text-gray-700"
                            >Parrafo</label
                        >
                        <div class=" flex rounded-md shadow-sm">
                            <textarea
                                type="text"
                                name="parrafo"
                                id="parrafo"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-200 sm:text-sm" placeholder="Descripción de la tarea"
                                
                            />
                        </div>
                    </div>
                    <div class="bg-white sm:p-4">
                        <label
                            for=""
                            class="block text-sm font-medium text-gray-700"
                            >Enlace</label
                        >
                        <div class=" flex rounded-md shadow-sm">
                            <input
                                type="text"
                                name="enlace"
                                id="enlace"
                                class="block w-full flex-1 rounded rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-200 sm:text-sm"
                                placeholder="Enlace"
                            />
                        </div>
                    </div>
                    <div class="bg-white sm:p-4">
                        <label
                            for=""
                            class="block text-sm font-medium text-gray-700"
                            >Skills</label
                        >
                        <div class=" flex rounded-md shadow-sm">
                            <input
                                type="text"
                                name="skills"
                                id="skills"
                                class="block w-full flex-1 rounded rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-200 sm:text-sm"
                                placeholder="Skills"
                            />
                        </div>
                        <div class="text-right ">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm mt-4 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-offset-2">Guardar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>



