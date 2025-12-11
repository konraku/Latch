<template>
  <main>
    <div class="container">
      <h1 class="titlecColor" >Latch</h1>
      <p class="textColor" >スクレイピングアプリへようこそ</p>

      <div>
        <input id="urlSearchInput" type="text" placeholder="Search or scan a URL"></input>
      </div>
      
      <div>
        <input id="searchURL" type="text"></input>
      </div>
    </div>

    <div id="bodyContents">

    </div>
  </main>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style scoped>
.titlecColor {
    color: #76aaf8;
}

.textColor {
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

#urlSearchInput {
  margin-top:25px;
}
</style>