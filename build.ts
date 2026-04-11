import { PugCompiler } from 'zig-pug'
import { YAML } from "bun"

const links = YAML.parse(await Bun.file("yml/links.yml").text()),
profile     = YAML.parse(await Bun.file("yml/profile.yml").text()),
skills      = YAML.parse(await Bun.file("yml/skills.yml").text())

for(const lang of ["en","es"]){

    const projects = YAML.parse(await Bun.file("yml/"+lang+"/projects.yml").text()),
    titles      = YAML.parse(await Bun.file("yml/"+lang+"/titles.yml").text()),
    employments = YAML.parse(await Bun.file("yml/"+lang+"/employments.yml").text()),
    education = YAML.parse(await Bun.file("yml/"+lang+"/education.yml").text()),
    compiler: PugCompiler = new PugCompiler({ pretty:false });

    compiler
    .setString("lang",lang) 
    .setArray("links",links)
    .setObject('profile', profile)
    .setObject('titles', titles)
    .setArray('skills',skills)
    .setArray('projects',projects)

    const result: string = compiler.compile( await Bun.file("templates/home.zpug").text() );        
    await Bun.write("public/"+(lang == "en" ? "index.html" : "es.html"),result)

}