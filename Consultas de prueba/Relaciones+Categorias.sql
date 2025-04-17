USE iPub;
SELECT 
    mesas.id AS mesa_id,
    productos.nombre AS producto_nombre,
    comandas.cantidad,
    comandas.descripcion,
    productos.precio_venta,
    productos.precio_compra,
    mesas.aPagar,
    mesas.formaPago,
    mesas.estado,
    
    categorias.nombre AS categoria_nombre   -- Añadido: nombre de la categoría

FROM 
    mesas
JOIN 
    comandas ON mesas.id = comandas.mesa_id
JOIN 
    productos ON comandas.id = productos.comanda_id
JOIN
    categorias ON productos.categoria_id = categorias.id;  -- JOIN con la tabla de categorías
