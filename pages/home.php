<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fernanda's Portfolio</title>
    <style>
        #introduction {
            margin: 0 auto;
            padding: 2rem;
            background-color: rgba(93, 77, 77, 0.59);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white;
            align-content: space-between;
            width: 90%;
            height: 1000px;

            div {
                background-color: rgba(68, 65, 65, 0.8);
                border-radius: 15px;
                margin: 0 auto;
                padding: 2rem 0;
                width: 70%;
                h1{
                    line-height: 2rem;
                    padding: 2rem;
                }
            }
            
            ul {
                width: 60%;
                margin: 1rem auto;
                padding: 2rem;
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                justify-content: center;
                align-items: center;
                list-style-type: none;

                li {
                    background-color: rgba(12, 1, 1, 0.78);
                    color: white;
                    padding: 1rem;
                    border-radius: 5px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    transition: transform 0.2s;
                    text-align: center;
                    align-items: center;
                    display: flex;

                    img {
                        width: 50px;
                        height: 50px;
                        margin-right: 10px;
                        border-radius: 15px;
                    }
                }
            }
            
        }
    </style>
</head>
<body>
    <main>
        <section id="introduction">
            <div>
                <h1>Welcome to My Portfolio</h1>
                <p>Hello! I'm Fernanda Montalvan, a Full Stack Developer.</p> <br>
                <p>Here are some of the languages I've learned so far:</p>
            </div>
            <ul>
                <li><img src="/Resources/images/html.png" alt="HTML">HTML</li>
                <li><img src="/Resources/images/css.png" alt="Cascade Style Sheet">CSS</li>
                <li><img src="/Resources/images/javascript.png" alt="Javascript">JavaScript</li>
                <li><img src="/Resources/images/React.png" alt="React JS">React</li>
                <li><img src="/Resources/images/typescript.png" alt="Typescript">Typescript</li>
                <li><img src="/Resources/images/nodejs.png" alt="NodeJS">Node.js</li>
                <li><img src="/Resources/images/mongodb.png" alt="MongoDB">MongoDB</li>
                <li><img src="/Resources/images/sql.png" alt="SQL">SQL</li>
                <li><img src="/Resources/images/MS Azure.png" alt="Microsoft Azure">Azure</li>
                <li><img src="/Resources/images//Github.png" alt="Github">Github</li>
            </ul>
        </section>
    </main>
</body>
</html>