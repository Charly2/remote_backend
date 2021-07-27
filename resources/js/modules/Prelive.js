export default {
    namespaced:true,
    state:{
        preLiveSong:{},
        ListSongs:[],
        preLiveVerse:0,
        ProgramSong:[
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
        SET_SONGS(state, songs) {
            console.log(songs)
            state.ListSongs = songs
        }
    },
    actions:{
        getSongs({ commit }) {
            axios.get('/api/v1/songs')
                .then(response => {
                    commit('SET_SONGS', response.data.data)
                })
        }
    },
    getters:{
        ListSongsGetters: state => {
            return state.ListSongs
        }
    }
}
