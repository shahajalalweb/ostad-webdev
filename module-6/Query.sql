
-- Task - 1

SELECT customers.customer_id, customers.name, customers.email, customers.location, COUNT(orders.order_id) AS total_order FROM `customers`
LEFT JOIN orders ON customers.customer_id = orders.customer_id
GROUP BY customers.customer_id
ORDER BY total_order DESC;

-- Task - 2

SELECT products.product_id, orders.order_id, products.name, order_items.qty, (order_items.unit_price*order_items.qty) AS orderItemsTotal FROM `order_items`
JOIN products ON products.product_id = order_items.product_id
JOIN orders ON order_items.order_id = orders.order_id
GROUP BY order_items.product_id
ORDER BY orders.order_id;

-- Task - 3

SELECT categories.category_id, categories.name, SUM(order_items.qty) AS totalQty, SUM(order_items.unit_price*order_items.qty) AS totalRevinue FROM `order_items`
JOIN products ON products.product_id = order_items.product_id
JOIN categories ON products.category_id = categories.category_id
GROUP BY categories.category_id
ORDER by totalRevinue DESC;

-- Task - 4

SELECT customers.customer_id, `name`, `email`, IFNULL(SUM(order_items.unit_price*order_items.qty),0) AS totalPurchaseAmount FROM `customers` 
LEFT JOIN orders ON customers.customer_id  = orders.customer_id
LEFT JOIN order_items ON orders.order_id  = order_items.order_id
GROUP BY customers.customer_id
ORDER BY totalPurchaseAmount DESC
LIMIT 5;