<template>
  <main>
    <div class="container">
      <h1 id="titlecColor" >Latch</h1>
      <p id="textColor" >スクレイピングアプリへようこそ</p>

      <div>
        <form id="searchUrlForm">
          <input id="searchUrlInput" type="text" placeholder="Search or scan a URL"></input>
          <button id="searchUrlButton" type="submit">Search</button>
        </form>
      </div>
      <!--
      <div>
        <input id="searchURL" type="text"></input>
      </div>
      -->
    </div>

    <div class="container">
      <div>
      </div>
    </div>

  </main>
</template>

<script>
import { ref, onMounted } from 'vue';
export default {
  name: 'App',
  
  setup() {
    onMounted(() => {
      document.title = 'Latch - Home';
    });
  }
}
</script>

<style scoped>
#titlecColor {
    color: #76aaf8;
}

#textColor {
    color: #EAEAEA;
    font-size: 14px;
}

.container {
  max-width: 800px;
  margin: 50px auto;
  padding: 20px;
  text-align: center;
  font-family: Arial, sans-serif;
}

h1{
  margin: 0px auto;
  color: #4CAF50;
  font-size: 5rem;
}

p {
  margin:0px auto;
  font-size: 1.2rem;
  color: #555;
}

#searchUrlInput {
  margin-top:25px;
}
</style>