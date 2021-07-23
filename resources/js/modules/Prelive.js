export default {
    namespaced:true,
    state:{
        preLiveSong:{},
        ApiSongs:[],
        preLiveVerse:0,
        ListSong:[
            {
                "id": 1,
                "nombre": "Te Doy Gloria",
                "data": [{
                    "title": "Estrofa 1",
                    "body": "Cuán hermoso\nEres, Jesús\nSon tus palabras\nEs tu amor."
                },
                    {
                        "title": "Estrofa 2",
                        "body": "Cuán glorioso\nEres, Jesús\nEs tu poder\nFue tu cruz."
                    },
                    {
                        "title": "Estrofa 3",
                        "body": "La que me salvó\nY me rescató\nUn momento ahí\nNos dio libertad"
                    },
                    {
                        "title": "Coro",
                        "body": "Te doy gloria, gloria\nTe doy gloria, gloria\nTe doy gloria, gloria\nA ti, Jesús"
                    }
                ]
            },{
            "id": 2,
            "nombre": "Dios imparable",
            "data": [
                {
                    "title": "Estrofa 1",
                    "body": "Eres alabado\nEres exaltado\nTu nombre levantamos\nAleluya, aleluya"
                },
                {
                    "title": "Estrofa 2",
                    "body": "Eres adorado\nTe glorificamos\nTu nombre levantamos\nAleluya, aleluya "
                },
                {
                    "title": "Estrofa 3",
                    "body": "A una sola voz\nNos unimos hoy\nTe cantamos Dios\nEn adoración"
                },
                {
                    "title": "Coro",
                    "body": "Dios imparable\nDios de imposibles,\ninigualable\nEres invencible"
                },
                {
                    "title": "Estrofa 2",
                    "body": "Eres adorado\nTe glorificamos\nTu nombre levantamos\nAleluya, aleluya "
                },
                {
                    "title": "Estrofa 3",
                    "body": "A una sola voz\nNos unimos hoy\nTe cantamos Dios\nEn adoración"
                },
            ]
        }
        ],

    },
    mutations:{
        setPreLiveSong(state,payload){
            state.preLiveSong = payload
        },
        setPreLiveVerse(state,payload){
            state.preLiveVerse = payload
        },
        SET_POSTS(state, posts) {
            console.log(posts)
            state.ApiSongs = posts
        }
    },
    actions:{
        getPosts({ commit }) {
            axios.get('https://jsonplaceholder.typicode.com/posts')
                .then(response => {
                    commit('SET_POSTS', response.data)
                })
        }
    }
}
