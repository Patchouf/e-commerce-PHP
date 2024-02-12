import json
import mysql.connector


# Fonction pour lire le fichier JSON
def read_json(file):
    with open(file, 'r') as f:
        return json.load(f)


def create_connection():
    return mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="projet-ecommerce"
    )


def insert_data(connection, data):
    # Créer un curseur pour exécuter des requêtes
    cursor = connection.cursor()
    # for each table in bdd clear them
    for table in data:
        if table['type'] == 'table':
            cursor.execute(f"DELETE FROM {table['name']}")
    # for each tables in the JSON file
    for table in data:
        # for each row in the table
        if table['type'] == 'table':
            # print(table)
            if table['data'] != []:
                for row in table['data']:
                    # print(row['name'])
                    columns = ', '.join(row.keys())
                    # create a string with the values
                    values = ', '.join(['%s'] * len(row))
                    # create the query
                    query = f"INSERT INTO {table['name']} ({columns}) VALUES ({values})"
                    list = []
                    for key in row:
                        try:
                            list.append(str(row[key]).encode('latin1').decode('utf-8'))
                        except:
                            list.append(str(row[key]))
                    # execute the query
                    cursor.execute(query, list)

    # commit the changes
    connection.commit()
    # close the cursor
    cursor.close()
    # close the connection
    connection.close()


def main():
    # Lire le fichier JSON
    data = read_json('data.json')
    # Créer une connexion à la base de données
    connection = create_connection()
    # Insérer les données dans la base de données
    insert_data(connection, data)


main()
