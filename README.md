# GeoJSON 2 MDB

This project started when I needed to work with way too many GeoJSON files and data for a Leaflet Website Map.
The loading of each GeoJSON file into the webpage led to slow load times.

The solution was to migrate all this data into a MariaDB Database Table.

# Template Database:

I use the ISO 3166 international standard for country data.
I also pulled Geometry Types data from QGIS, Leaflet and ARCGIS.

- [ISO3](https://www.iban.com/country-codes)
- GEOMETRY - GeoJSON Data goes here.
- GEOMETRY_TYPES
- METADATA - AKA Properties or Attributes.

## METADATA Table

This table is still a work in progress.

```SQL
CREATE TABLE METADATA (
    code VARCHAR(3), /* ISO 3166 Country Code */
    continent VARCHAR(13), /* Continent */
    country_cn VARCHAR(52), /*Common Name for Country*/
    population BIGINT() /*INT is too small at 2 Billion.*/,
);
```

```SQL
ALTER TABLE METADATA
ADD column_name datatype;
```

```SQL
ALTER TABLE METADATA
DROP column_name datatype;
```