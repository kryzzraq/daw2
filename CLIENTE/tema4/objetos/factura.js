class Cliente{
    constructor(nombreC, direccionC, telefonoC,dni){
        this.nombreC = nombreC
        this.direccionC = direccionC
        this.telefonoC = telefonoC
        this.dni = dni
        }
}

class Producto{
    constructor(descripcion, precio){
        this.descripcion = descripcion
        this.precio = precio
    }
    getPrecio(){
        return this.precio
    }
}

class Factura{
    constructor(nombreEmpresa, direccionE,telefonoE,nif, Cliente){
        this.nombreEmpresa = nombreEmpresa
        this.direccionE = direccionE
        this.telefonoE = telefonoE
        this.nif = nif
        this.Cliente = Cliente
        this.listaProductos = [];
        this.importeTotal = 0
        this.tipoIva = 21
        this.formaPago = ""
    }

    setTipoIva(iva){
        this.tipoIva = iva
    }
    actualizarCarrito(producto){
        this.listaProductos[this.listaProductos.length] = producto
        console.log(`Carrito actualizado`)
    }

    calcularFactura(){
        for(let i = 0; i<this.listaProductos.length;i++){
            this.importeTotal += this.listaProductos[i].getPrecio()
        }
        this.importeTotal += this.importeTotal*this.tipoIva/100
        return this.importeTotal
    }

    getImporteTotal(){
        return this.importeTotal
    }
    mostrarImporteTotal(){
        console.log(`El precio total de la factura es: ${this.getImporteTotal()}€`)
    }
}

var producto1 = new Producto("Colonia", 15.45)
var raul = new Cliente("Raul Fernandez", "Av. Fuentes", "843875478", "4587458D");
var fact1 = new Factura("noseque SL", "C/mayor", "684958945", "74549584FD", raul)

console.log(fact1.listaProductos.length)
fact1.actualizarCarrito(producto1);

console.log(fact1.calcularFactura());

fact1.mostrarImporteTotal();