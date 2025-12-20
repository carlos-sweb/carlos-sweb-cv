import { PugCompiler } from 'zig-pug'
import { YAML } from "bun"

const links = YAML.parse(await Bun.file("yml/links.yml").text())
const profile = YAML.parse(await Bun.file("yml/profile.yml").text())
const titles = YAML.parse(await Bun.file("yml/en/titles.yml").text())
const skills = YAML.parse(await Bun.file("yml/skills.yml").text())

// Using PugCompiler class
const compiler: PugCompiler = new PugCompiler();
compiler
    .setArray("links",links)
    .setObject('profile', profile)
    .setObject('titles', titles)
    .setArray('skills', skills)

const result: string = compiler.compile( await Bun.file("templates/home.zpug").text() );

console.log(result)