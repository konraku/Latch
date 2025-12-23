<template>
    <div class="container">

      <div class="m-auto vstack gap-1">
        <h1 id="titlecColor" class="m-0">Latch</h1>
        <p id="textColor">
          Welcome to Latch.<br>
          xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.
        </p>
      </div>

      <div class="m-auto vstack gap-3">
        <div class="section-wrapper">
          <form @submit.prevent="handleSearch" id="searchUrlForm" class="search vstack gap-4 align-items-center mx-2">

            <input v-model="url" id="searchUrlInput" class="form-control" type="text" placeholder="Search a URL"></input>
            <button id="searchUrlButton" class="btn btn-outline-primary px-5" type="submit">Search</button>

          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <!--omnibar予定地(img / svg / 保存した画像(キャッシュ/保存))-->
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';
export default {
  name: 'Main',
  
  setup() {
    onMounted(() => {
      document.title = 'Latch - Home';
    });

    const url = ref('');
    /*
    const handleSearch = () => {
      console.log('入力されたURL:', url.value);
    };
    */
    const handleSearch = async () => {
    const res = await axios.post('http://localhost:8000/api/scrape', {
        url: url.value
      });
      console.log(res.data);
    };

    return {
      url,
      handleSearch
    };
  }
}
</script>

<style scoped>
#titlecColor {
    color: #d62b53;
    font-size: 5rem;
}

#textColor {
    color: #f0bc43;
    font-size: 14px;
}

.container {
  max-width: 800px;
  margin: 30px auto;
  padding: 20px;
  text-align: center;
  font-family:Arial, Helvetica, sans-serif
}

/* form */
#searchUrlInput {
  border-color: #b8b7b7;
  background-color: #151518;
  color: #ffffff;
}
#searchUrlInput::placeholder {
  color:#878787;
}
#searchUrlInput:focus{
  border-color: #d62b53;
  box-shadow: none;
}
#searchUrlInput:hover{
  color: #ffffff;
  border-color: #d62b53;
}

/* btn */
#searchUrlButton {
  border-radius: 10px;
  border-color: #f3f3f3;
  color: #d62b53;
}
#searchUrlButton:hover {
  background-color: #d62b53;
  color: #ffffff;
  border-color: #d62b53;
}

</style>