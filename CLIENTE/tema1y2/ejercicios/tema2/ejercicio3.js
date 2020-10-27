var objeto =  {nombre:"Juan", edad:84, profesion:"Ministro"};

for( const prop in objeto){
    console.log(`${prop} = ${objeto[prop]}`)
}