SELECT 
/*
	comandas.mesa_id,
    comandas.id,
	productos.comanda_id,
	productos.id,
*/
    mesas.id,
    productos.nombre,

    #comandas.producto,
    comandas.cantidad,
    comandas.descripcion,
    productos.precio_venta,
	productos.precio_compra,

	mesas.aPagar,

	mesas.formaPago,
    mesas.estado
        

FROM 
    mesas
JOIN 
    comandas ON mesas.id = comandas.mesa_id
JOIN 
    productos ON comandas.id = productos.comanda_id;
