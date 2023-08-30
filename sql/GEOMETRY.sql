/*
*   This table will be filled up with the GeoJSON Geometry: Polygons or other objects + coordinates.
*/
CREATE TABLE GEOMETRY (
    code VARCHAR(3) PRIMARY KEY,
    type TINYINT,
    coordinates LONGTEXT
);