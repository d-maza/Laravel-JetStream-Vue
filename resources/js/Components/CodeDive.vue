<template>
  <div class="greetings">

    <section>
        <div class="content">
            <h2 translate="no">DiveCode</h2>
            <h2 translate="no">DiveCode</h2>
        </div>
        
    </section>


  </div>
</template>



<style scoped>

* {


            padding: 10px;
            box-sizing: border-box;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
        }


        .content {
            position: relative;
        }

        .content h2 {
            color: #fff;
            font-size: 6em;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        .content h2:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 2px #03a9f4;
        }

        .content h2:nth-child(2) {
            color: #03a9f4;
            animation: animate 4s ease-in-out infinite;
        }

        @keyframes animate {
            0%,
            100% {
                clip-path: polygon(
                    0% 45%,
                    16% 44%,
                    33% 50%,
                    54% 60%,
                    70% 61%,
                    84% 59%,
                    100% 52%,
                    100% 100%,
                    0% 100%
                );
            }

            50% {
                clip-path: polygon(
                    0% 60%,
                    15% 65%,
                    34% 66%,
                    51% 62%,
                    67% 50%,
                    84% 45%,
                    100% 46%,
                    100% 100%,
                    0% 100%
                );
            }
        }



h1 {
  font-weight: 500;
  font-size: 2.6rem;
  top: -10px;
}

h3 {
  font-size: 1.2rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
}

@media (min-width: 1024px) {
  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>

<script>
  export default {
    name: 'CodeDive', 
  }
  </script>