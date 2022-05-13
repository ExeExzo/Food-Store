const {Pool, Client} = require('pg')
const connectionString = 'postgressql://postgres:03072003@localhost:3000/site'

const client = new Client({
    connectionString:connectionString
})

client.connect()


client.query('Select * from products')