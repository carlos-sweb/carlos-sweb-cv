import { PugCompiler } from 'zig-pug'
import { YAML } from "bun"

const links = YAML.parse(await Bun.file("yml/links.yml").text()),
profile     = YAML.parse(await Bun.file("yml/profile.yml").text()),
skills      = YAML.parse(await Bun.file("yml/skills.yml").text()),

projects    = YAML.parse(await Bun.file("yml/en/projects.yml").text()),
titles      = YAML.parse(await Bun.file("yml/en/titles.yml").text()),
employments = YAML.parse(await Bun.file("yml/en/employments.yml").text()),
education = YAML.parse(await Bun.file("yml/en/education.yml").text())

    

// Using PugCompiler class
const compiler: PugCompiler = new PugCompiler();
compiler
    .setString("lang","en") 
    .setArray("links",links)
    .setObject('profile', profile)
    .setObject('titles', titles)
    .setArray('skills',skills)
    .setArray('projects',projects)

const result: string = compiler.compile( await Bun.file("templates/home.zpug").text() );

console.log(result)

