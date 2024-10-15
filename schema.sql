CREATE TABLE astronaut_records (
    astronaut_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender VARCHAR(20),
    experience_years VARCHAR(50),
    missions TEXT,
    certifications TEXT,
    preferred_spacecraft VARCHAR(50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
