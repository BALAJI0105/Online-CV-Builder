<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-light">
    <h1 class="text-center my-5 fw-bold"><em><ul>Resume Details</ul></em></Details></h1>
    <div class="form-container">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="border p-3 border-dark">    
                <h2><em>Profile Image</em></h2>
                <div class="mb-3">
                    <label class="form-label">Select an Image (1:1)</label>
                    <input class="form-control" name="profile_image" type="file" required>
                </div>
            </div>
            <div class="border p-3">    
                <h2><em>Contact Information</em></h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <h5><i>About yourself</i></h5>
                    <div class="form-label">
                    <textarea class="form-control" name="profession" style="height: 50px" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"><i>Email  address</i></label>
                    <input type="email" class="form-control" name="email" required>
                    <div class="form-text text-light">You're E-mail is secured.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="030-012-34567" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </div>
            </div>
            <div class="border p-3">    
                <h2><em>Key Skills</em></h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skill:</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Select your Skill level:</option>
                        <option value="1">1 - Beginner</option>
                        <option value="2">2 - Intermediate level</option>
                        <option value="3">3 - Advanced level</option>
                        <option value="4">4 - Proficient</option>
                        <option value="5">5 - Expert</option>
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()"><i>Add Skill</i></button>
                </div>
            </div>
            <div class="border p-3">    
                <h2>Soft Skills</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skill</label>
                    <input type="text" name="hobby1" class="form-control" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">Add</button>
                </div>
            </div>
            <div class="border p-3">    
                <h2>Professional Summary</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
                </div>
            </div>
            <div class="border p-3">    
                <h2><em>Education Qualification</em></h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Institute Name</label>
                    <input type="text" name="institute1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Honor</label>
                    <input type="text" name="degree1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">From</label>
                        <input type="text" name="from1" class="form-control">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">To</label>
                        <input type="text" name="to1" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Grade/CGPA</label>
                    <input type="text" name="grade1" class="form-control">
                </div>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                </div>
            </div>
            <div class="border p-3">    
                <h2><em>Experience/Projects</em></h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <input type="text" name="title1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">Add more</button>
                </div>
            </div>
            <input type="submit" class="form-control my-2">
        </form>
    </div>
    </div>
    <script src="app.js"></script>
</body>
</html>